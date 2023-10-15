<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                    "apikey: 386dafc0-5eb1-11ee-8845-8d1e917a38e1",
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
            $listing->update();

            return "ok";
        } else {
            return "Не удалось получить координаты.";
        }
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
