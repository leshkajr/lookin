<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\AmenitiesListings;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Listing;
use App\Models\PhotosPath;
use App\Models\SleepingPlace;
use App\Models\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use JsonException;

class ApiController extends Controller
{
    /**
     * @throws JsonException
     */
    public function getLocation()
    {

        $location = array();
        if(isset($_GET['text'])){
            $city_name = $_GET['text'];
            foreach(Country::all() as $country){
                if(str_contains(strtolower($country->name), strtolower($city_name))){
                    $location[] = array(
                        'id' => $country->id,
                        'type' => 'country',
                        'name' => $country->name
                    );
                    foreach(City::where('countryId',$country->id)->get() as $city){
                        $location[] = array(
                            'id' => $city->id,
                            'type' => 'city',
                            'name' => $city->name,
                            'name_country' => $country->name,
                        );
                    }
                }
            }

            foreach(City::all() as $city){
                if(str_contains(strtolower($city->name), strtolower($city_name))){
                    $location[] = array(
                        'id' => $city->id,
                        'type' => 'city',
                        'name' => $city->name,
                        'name_country' => Country::find($city->countryId)->name,
                    );
                }
            }


        }
        $json = json_encode($location, JSON_THROW_ON_ERROR);
        return $json !== false ? $json : "not found";
    }

    function getCities(){
        if(isset($_GET['countryId'])){
            $cities = City::where('countryId',$_GET['countryId'])->get();
            $json = json_encode($cities, JSON_THROW_ON_ERROR);
            return $json;
        } else {
            return "Couldn't get countryId.";
        }
    }

    function getCityFromIp(){
        if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];

            return ['latitude' => $latitude,'longitude' => $longitude];
        } else {
            return "Couldn't get coordinates.";
        }
    }

    function changePropertyUser(){
        if (isset($_POST['userId'], $_POST['propertyName'], $_POST['propertyText'])) {
            $userId = $_POST['userId'];
            $propertyName = $_POST['propertyName'];
            $propertyText = $_POST['propertyText'];
            $user = User::find($userId);
            if($propertyName === 'name'){
                $names = explode(';',$propertyText);
                $user->name = $names[0];
                $user->lastName = $names[1];
            }
            else if($propertyName === 'email'){
                $user->email = $_POST['propertyText'];
            }
            else if($propertyName === 'numberPhone'){
                $user->numberPhone = $_POST['propertyText'];
            }
            else if($propertyName === 'address'){
                $values = explode(';',$propertyText);
                Address::create([
                    "firstLine" => $values[2],
                ]);
            }
            $user->update();

            return "ok";
        } else {
            return "Не удалось получить координаты.";
        }
    }

    function changePropertyListing(){
        if (isset($_POST['listingId'], $_POST['propertyName'], $_POST['propertyValue'])) {
            set_time_limit(120);
            $listingId = $_POST['listingId'];
            $propertyName = $_POST['propertyName'];
            $propertyValue = $_POST['propertyValue'];
            $listing = Listing::find($listingId);
            if($propertyName === 'title'){
                $listing->title = $propertyValue;
            }
            else if($propertyName === 'description'){
                $listing->description = $propertyValue;
            }
            else if($propertyName === 'categoryId'){
                $listing->categoryId = $propertyValue;
            }
            else if($propertyName === 'typeId'){
                $listing->typeId = $propertyValue;
            }
            else if($propertyName === 'location'){
                $values = explode(';',$propertyValue);
                $countryId = $values[0];
                $cityId = $values[1];
                $cityName = City::find($cityId)->name;
                $post_index = $values[2];
                $firstLine = $values[3];
                $secondLine = $values[4];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HEADER, false);
                $data = [
                    "q" => $firstLine." ".$post_index." ".$cityName,
                    "tbm" => "lcl",
                ];
                curl_setopt($ch, CURLOPT_URL, "https://app.zenserp.com/api/v2/search?" . http_build_query($data));
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Content-Type: application/json",
                    "apikey: 07cd7540-6cd3-11ee-bfb2-1747a10ff0c3",
                ));

                $response = curl_exec($ch);
                curl_close($ch);
                $dataLocation = json_decode($response);
                $address = [
                    "firstLine" => $firstLine,
                    "secondLine" => $secondLine,
                    "index" => $post_index,
                    "city" => $cityName,
                    "lat" => $dataLocation->maps_results[0]->coordinates->latitude,
                    "lon" => $dataLocation->maps_results[0]->coordinates->longitude,
                ];
                $listing->addressId = Address::create($address)->id;
                $listing->cityId = $cityId;
                $listing->countryId = $countryId;
            }
            else if($propertyName === 'information'){
                $values = explode(';',$propertyValue);
                $max_count_guests = $values[0];
                $count_rooms = $values[1];
                $count_beds= $values[2];
                $count_bathrooms= $values[3];

                $listing->countRooms = $count_rooms;
                $listing->countBathrooms = $count_bathrooms;
                $listing->sleepingPlacesId = SleepingPlace::create([
                    "countSingleBeds" => $count_beds,
                    "countDoubleBeds" => 0,
                    "countMattresses" => 0,
                ])->id;
            }
            else if($propertyName === 'amenities'){
                $values = explode(';',$propertyValue);
                foreach($values as $value) {
                    if(AmenitiesListings::all()->where("listingId",$listingId)
                        ->where("amenityId",$value)->count() === 0){
                        AmenitiesListings::create([
                            'listingId' => $listingId,
                            'amenityId' => $value,
                        ]);
                    }
                }
            }
            else if($propertyName === 'confirmation'){
                if($propertyValue === 'yes'){
                    $listing->needsConfirmFromHost = true;
                }
                else{
                    $listing->needsConfirmFromHost = false;
                }
            }
            else if($propertyName === 'price'){
                $listing->priceForNight = (double)$propertyValue;
            }

            $listing->update();

            return "ok";
        } else {
            return "Не удалось получить координаты.";
        }
    }

    function loadPhotosListing(Request $request){
        $file = $request->file('propertyValue');
        $destinationPath = public_path('storage/images/photos_listings');
        $typeObjectId = 1;
        $generatedName = hash('sha256', $file->getClientOriginalName());
        $listingId = $_POST['listingId'];
        $file->move($destinationPath, $generatedName.".jpg");
        PhotosPath::create([
                'titlePhoto' => $file->getClientOriginalName(),
                'typeObjectId' => $typeObjectId,
                'objectId' => $listingId,
                'path' => $generatedName.".jpg",
        ]);

//        foreach($_FILES as $file){
////            Log::debug($file);
//            $uploadFile = new UploadedFile("public/images/photos_listings/",$file['name']);
//            $typeObjectId = 1;
//            $generatedName = hash('sha256', $file['name']);
//            $listingId = $_POST['listingId'];
//            $uploadFile->move(public_path('images/photos_listings'), $generatedName);
//            Storage::putFile('public/images/photos_listings/',$file,$generatedName);
//            PhotosPath::create([
//                'titlePhoto' => $file['name'],
//                'typeObjectId' => $typeObjectId,
//                'objectId' => $listingId,
//                'path' => $generatedName,
//            ]);
//        }
    }

    function loadImage(){

        $uploadDirectory = asset("images/photos")."/";

        $response = array();

        if (isset($_FILES["file"])) {
            $file = request()->file('file');
            $generatedName = $file->hashName();


            if(isset($_GET['listingId'])){
                Image::create([
                    'listingId' => $_GET['listingId'],
                    'urlImage' => $generatedName,
                ]);
            }
            else{
                $user = User::find(Auth::id());
                $user->profilePhoto = $generatedName;
                $user->save();
            }
            $response["success"] = true;

            Storage::putFile('public/images/photos/',$file,$generatedName);

        } else {
            $response["success"] = false;
        }
        header("Content-Type: application/json");
        echo json_encode($response);
    }
}
