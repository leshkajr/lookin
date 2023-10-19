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
use Illuminate\Support\Facades\Date;
use MongoDB\Driver\Session;

class MainController extends Controller
{
    public function index(){


        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $types_listings = TypeListing::all();
        $amenitiesFilters = Amenity::all();
        $categoriesAmenities = CategoryAmenity::all();
//        dd($amenities->where('categoryAmenityId',1));

        $listings_db = Listing::all();

        $listings = array();
        foreach ($listings_db as $listing_db){
            $listing = [
                'id'=>$listing_db->id,'title' => $listing_db->title, 'description' => $listing_db->description, 'hostId' => $listing_db->hostId, 'categoryId' => $listing_db->categoryId, 'typeId' => $listing_db->typeId, 'rating' => $listing_db->rating, 'countReviews' => $listing_db->countReviews, 'countRooms' => $listing_db->countRooms, 'countBathrooms' => $listing_db->countBathrooms, 'countLikes' => $listing_db->countLikes, 'priceForNight' => $listing_db->priceForNight, 'priceCleaning' => $listing_db->priceCleaning, 'discountWeek' => $listing_db->discountWeek, 'discountMonth' => $listing_db->discountMonth, 'mixRent' => $listing_db->mixRent, 'maxRent' => $listing_db->maxRent, 'needsConfirmFromHost' => $listing_db->needsConfirmFromHost, 'sleepingPlacesId' => $listing_db->sleepingPlacesId, 'isAvailable' => $listing_db->isAvailable, 'isPublic' => $listing_db->isPublic, 'isAlone' => $listing_db->isAlone, 'isAnimals' => $listing_db->isAnimals, 'countryId' => $listing_db->countryId, 'cityId' => $listing_db->cityId, 'addressId' => $listing_db->addressId, 'created_at' => $listing_db->created_at, 'updated_at' => $listing_db->updated_at,
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
            $likesListing = LikesListing::where(['listingId' => $listing_db->id, 'userId' => Auth::id()])->get();
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

            //categoryListing
            $categoryListing = CategoryListing::find($listing_db->categoryId);
            $listing += [
                'category' => $categoryListing,
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

            array_push($listings,$listing);
        }


        if(isset($_GET['guests'],$_GET['arrivalDate'],$_GET['departureDate'])){
            $guests = $_GET['guests'];
            $arrivalDate = $_GET['arrivalDate'];
            $departureDate = $_GET['departureDate'];
        }
        else{
            $guests = 1;
            $arrivalDate = time();
            $departureDate = time() + 604800;
        }

        $searchInfo = [
            "arrivalDateTimestamp" => $arrivalDate,
            "arrivalDateDay" => date('j',$arrivalDate),
            "arrivalDateMonth" => strtolower(substr(date('F',$arrivalDate),0,4)),
            "departureDateTimestamp" => $departureDate,
            "departureDateDay" => date('j',$departureDate),
            "departureDateMonth" => strtolower(substr(date('F',$departureDate),0,4)),
            "guests" => $guests,
        ];
        $location = null;
        if(isset($_GET['location_id'])){
            $city = City::find($_GET['location_id']);
            $location = [
                'city' => $city,
                'country' => Country::find($city->countryId),
            ];
        }


        return view('main.main',
            ['languages'=>$languages, 'currencies'=>$currencies, 'categoriesListing'=>$categoriesListing,
            'types_listings' => $types_listings,'amenities' => $amenitiesFilters, 'categoriesAmenities'=>$categoriesAmenities,
            'searchInfo' => $searchInfo,'location'=>$location, 'listings' => $listings]);
    }

    public function start($countryName = null) {
        $languages = Language::all();
        $currencies = Currency::all();
        $types_listings = TypeListing::all();
        $amenities = Amenity::all();

        if(!isset($_GET['cityId'])){
            $ip_api_url = 'https://api.ipify.org?format=json';
            $response = file_get_contents($ip_api_url);
            $data = json_decode($response, true);
            $user_ip = $data['ip'];

            $ip_info_api_url = 'http://ip-api.com/json/'.$user_ip;
            $response = file_get_contents($ip_info_api_url);
            $data = json_decode($response, true);
            $city = City::where('name',$data['city'])->first();
            return redirect()->route('main.country',['cityId'=>$city->id]);
        }
        $city = City::find($_GET['cityId']);
        $location = [
            'city' => $city,
            'country' => Country::find($city->countryId),
        ];


        return view('main.start',
            ['languages'=>$languages, 'currencies'=>$currencies, 'types_listings' => $types_listings,
                'amenities' => $amenities, 'location'=>$location]);
    }

    public function rooms(){

        $listing_db = Listing::find($_GET['listingId']);

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
        else{
            $guests = 1;
            $arrivalDate = time();
            $departureDate = time() + 604800000;
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
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HEADER, false);
//        $address = Address::find($listing_db->addressId);
//        $data = [
//            "q" => $address->firstLine." ".$address->index." ".$address->city,
//            "tbm" => "lcl",
//        ];
//        curl_setopt($ch, CURLOPT_URL, "https://app.zenserp.com/api/v2/search?" . http_build_query($data));
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            "Content-Type: application/json",
//            "apikey: 386dafc0-5eb1-11ee-8845-8d1e917a38e1",
//        ));
//
//        $response = curl_exec($ch);
//        curl_close($ch);
//        $dataLocation = json_decode($response);
//        $listing += [
//            "address" => [
//                "firstLine" => $address->firstLine,
//                "secondLine" => $address->secondLine,
//                "index" => $address->index,
//                "city" => $address->city,
//            ],
//            "coordinates" => [
//                'lat' => $dataLocation->maps_results[0]->coordinates->latitude,
//                'lon' => $dataLocation->maps_results[0]->coordinates->longitude,
//            ],
//        ];
        $address = Address::find($listing_db->addressId);
        $listing += [
            "address" => [
                "firstLine" => $address->firstLine,
                "secondLine" => $address->secondLine,
                "index" => $address->index,
                "city" => $address->city,
            ],
            "coordinates" => [
                'lat' => $address->lat,
                'lon' => $address->lon,
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

        $user=User::find(Auth::id());

        return view('profile.account',['languages'=>$languages, 'currencies'=>$currencies,
        'categoriesListing'=>$categoriesListing,'user'=> $user,]);
    }
}
