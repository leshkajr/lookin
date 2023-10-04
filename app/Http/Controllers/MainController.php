<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\AmenitiesListings;
use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\LikesListing;
use App\Models\Listing;
use App\Models\PhotosPath;
use App\Models\SleepingPlace;
use App\Models\TypeListing;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class MainController extends Controller
{
    public function index(){


        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $types_listings = TypeListing::all();
        $amenities = Amenity::all();
        $categoriesAmenities = CategoryAmenity::all();
//        dd($amenities->where('categoryAmenityId','1'));
        return view('main.main',
            ['languages'=>$languages, 'currencies'=>$currencies, 'categoriesListing'=>$categoriesListing,
            'types_listings' => $types_listings,'amenities' => $amenities, 'categoriesAmenities'=>$categoriesAmenities]);
    }

    public function start($countryName = null) {
        $languages = Language::all();
        $currencies = Currency::all();
        $types_listings = TypeListing::all();
        $amenities = Amenity::all();

        $ip_api_url = 'https://api.ipify.org?format=json';
        $response = file_get_contents($ip_api_url);
        $data = json_decode($response, true);
        $user_ip = $data['ip'];

        $ip_info_api_url = 'http://ip-api.com/json/'.$user_ip;
        $response = file_get_contents($ip_info_api_url);
        $data = json_decode($response, true);
        $location = $data['city']." Wallpapers HD 1920 1080";
        $location = str_replace(" ","%20",$location);
        $dataImages = json_decode(file_get_contents("https://app.zenserp.com/api/v2/search?apikey=386dafc0-5eb1-11ee-8845-8d1e917a38e1&q=".$location."&tbm=isch"));
        dd($dataImages->image_results);

        return view('main.start',
            ['languages'=>$languages, 'currencies'=>$currencies, 'types_listings' => $types_listings,
                'amenities' => $amenities]);
    }

    public function rooms(){

        $listing_db = Listing::find(1);

        $listing = [
            'title' => $listing_db->title, 'description' => $listing_db->description, 'hostId' => $listing_db->hostId, 'categoryId' => $listing_db->categoryId, 'typeId' => $listing_db->typeId, 'rating' => $listing_db->rating, 'countReviews' => $listing_db->countReviews, 'countRooms' => $listing_db->countRooms, 'countBathrooms' => $listing_db->countBathrooms, 'countLikes' => $listing_db->countLikes, 'priceForNight' => $listing_db->priceForNight, 'priceCleaning' => $listing_db->priceCleaning, 'discountWeek' => $listing_db->discountWeek, 'discountMonth' => $listing_db->discountMonth, 'mixRent' => $listing_db->mixRent, 'maxRent' => $listing_db->maxRent, 'needsConfirmFromHost' => $listing_db->needsConfirmFromHost, 'sleepingPlacesId' => $listing_db->sleepingPlacesId, 'isAvailable' => $listing_db->isAvailable, 'isPublic' => $listing_db->isPublic, 'isAlone' => $listing_db->isAlone, 'isAnimals' => $listing_db->isAnimals, 'countryId' => $listing_db->countryId, 'cityId' => $listing_db->cityId, 'addressId' => $listing_db->addressId, 'created_at' => $listing_db->created_at, 'updated_at' => $listing_db->updated_at,
        ];

        //diff day
        $start_datetime = new DateTime($listing_db->created_at);
        $diff = $start_datetime->diff(new DateTime());
        $listing += [
          'diffDay' => $diff->d,
        ];

        //country and city
        $country = [
            'id' => $listing_db->countryId,
            'name' => Country::find($listing_db->countryId)->name,
        ];
        $city = [
            'id' => $listing_db->cityId,
            'name' => City::find($listing_db->cityId)->name,
        ];
        $listing += [
            'country' => $country,
            'city' => $city,
        ];

        //photos
        $photos = PhotosPath::where('objectId',$listing_db->id)->get();
        $listing += [
            'photos' => $photos
        ];

        //isLike
        $likesListing = LikesListing::where(['listingId' => $listing_db->id, 'userId' => auth()->id()])->get();
        if(count($likesListing) === 0){
            $listing += [
                'isLike' => false
            ];
        }
        else{
            $listing += [
                'isLike' => true
            ];
        }

        //typeListing
        $typeListing = TypeListing::find($listing_db->typeId);
        $listing += [
            'type' => $typeListing,
        ];

        // host
        $listing += [
            'user' => User::find($listing_db->hostId),
        ];

        // amenities
        $amenitiesListing = AmenitiesListings::where('listingId', $listing_db->id)->get();
        $amenities = array();
        foreach ($amenitiesListing as $amenityListing){
            array_push($amenities,Amenity::find($amenityListing->amenityId));
        }
        $listing += [
            'amenities' => $amenities,
        ];

        // count guests, nights and price
        $guests = 0;
        $arrivalDate = 0;
        $departureDate = 0;
        if(isset($_GET['guests'],$_GET['arrivalDate'],$_GET['departureDate'])){
            $guests = $_GET['guests'];
            $arrivalDate = $_GET['arrivalDate'];
            $departureDate = $_GET['departureDate'];
        }
        $datediff = $departureDate - $arrivalDate;
        $days = ($datediff / (60 * 60 * 24)) / 1000;
        $priceForNight = $listing_db->priceForNight;
        $priceAllNights = $priceForNight * $days * $guests;
        $priceCleaning = $listing_db->priceCleaning;
        $totalPrice = $priceAllNights + $priceCleaning;
        $priceServiceLookin = round($totalPrice * 3 / 100);
        $totalPrice = $priceAllNights + $priceCleaning + $priceServiceLookin;
        $listing += [
            'guests' => $guests,
            'daysReservation' => $days,
            'priceAllNights' => $priceAllNights,
            'priceServiceLookin' => $priceServiceLookin,
            'totalPrice' => $totalPrice,
        ];

        // countBeds

        $sleeping_place = SleepingPlace::find($listing_db->sleepingPlacesId);
        $listing += [
            'countSingleBeds' => $sleeping_place->countSingleBeds,
            'countDoubleBeds' => $sleeping_place->countDoubleBeds,
            'countMattresses' => $sleeping_place->countMattresses,
        ];

        // coordinates
//        $dataLocation = json_decode(file_get_contents("https://nominatim.openstreetmap.org/search?q=Ukrainska%202%20Kryvyi%20Rih%20Ukraine&format=json", false, $context));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $address = Address::find($listing_db->addressId);
        $data = [
            "q" => $address->firstLine." ".$address->index." ".$address->city,
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

        $listing += [
            "address" => [
                "firstLine" => $address->firstLine,
                "secondLine" => $address->secondLine,
                "index" => $address->index,
                "city" => $address->city,
            ],
            "coordinates" => [
                'lat' => $dataLocation->maps_results[0]->coordinates->latitude,
                'lon' => $dataLocation->maps_results[0]->coordinates->longitude,
            ],
        ];

        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $types_listings = TypeListing::all();
        $amenities = Amenity::all();
        $categoriesAmenities = CategoryAmenity::all();

        return view('main.listing',
            ['languages'=>$languages, 'currencies'=>$currencies, 'categoriesListing'=>$categoriesListing,
                'types_listings' => $types_listings,'amenities' => $amenities, 'categoriesAmenities'=>$categoriesAmenities,
                'listing'=>$listing]);

    }

    public function account()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.account',['languages'=>$languages, 'currencies'=>$currencies,
        'categoriesListing'=>$categoriesListing,]);
    }
    public function notification()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.notification',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function house_type()
    {
        $languages = Language::all();
        $currencies = Currency::all();


        $categoriesListing = CategoryListing::all();

        return view('profile.house_type',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function house_type1()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $typesListing = TypeListing::all();

        return view('profile.house_type1',['languages'=>$languages, 'currencies'=>$currencies,
            'typesListing'=>$typesListing,]);
    }
    public function house_location()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $countries = Country::all();

        $categoriesListing = CategoryListing::all();
        $cities = null;
        $choose_country_id = null;
        if(isset($_GET['countryId'])){
            $cities = City::where('countryId',$_GET['countryId'])->get();
            $choose_country_id = $_GET['countryId'];
        }

        return view('profile.house_location',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing, 'cities'=>$cities,'countries'=>$countries,
            'choose_country_id'=>$choose_country_id]);
    }
    public function house_information()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.house_information',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function personal_data()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        $user=User::find(Auth::id());

        return view('profile.personal_data',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'user'=>$user]);
    }
    public function personal_verification()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.personal_verification',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function profils()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.profils',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function house_amenities()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();
        $ameniti =Amenity::all();
        $essentials = Amenity::where('categoryAmenityId', 1)->get();
        $features= Amenity::where('categoryAmenityId', 2)->get();
        $location= Amenity::where('categoryAmenityId', 3)->get();
        $safety= Amenity::where('categoryAmenityId', 4)->get();
        return view('profile.house_amenities',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification,'ameniti'=>$ameniti,'essentials'=>$essentials,'features'=>$features,'location'=>$location,'safety'=>$safety]);
    }


}
