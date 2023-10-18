<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\CategoryListing;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Listing;
use App\Models\TypeListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreateListingController extends Controller
{
    public function start()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        return view('create-listing.house_start',['languages'=>$languages, 'currencies'=>$currencies]);
    }
    public function category()
    {
        $languages = Language::all();
        $currencies = Currency::all();


        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_category',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function type()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $typesListing = TypeListing::all();


        return view('create-listing.house_type',['languages'=>$languages, 'currencies'=>$currencies,
            'typesListing'=>$typesListing,]);
    }
    public function name()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();
        return view('create-listing.house_name',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function description()
    {
        if(!Session::has("listingId")){
            $title = $_POST['title'];
            $hostId = Auth::id();
            $categoryId = $_POST['categoryId'];
            $typeId = $_POST['typeId'];
            $listingId = Listing::create([
                "title" => $title,
                "hostId" => $hostId,
                "categoryId" => $categoryId,
                "typeId" => $typeId,
            ])->id;
            Session::put("listingId", $listingId);
        }
        else{
            $listingId = Session::get("listingId");
        }


        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_description',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'listingId'=>$listingId]);
    }
    public function location()
    {
        $listingId = $_POST['listingId'];

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

        return view('create-listing.house_location',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing, 'cities'=>$cities,'countries'=>$countries,
            'choose_country_id'=>$choose_country_id, 'listingId' => $listingId]);
    }
    public function information()
    {
        $listingId = $_POST['listingId'];
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_information',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'listingId'=>$listingId]);
    }

    public function amenities()
    {
        $listingId = $_POST['listingId'];

        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $ameniti =Amenity::all();
        $essentials = [
            "id" => 1,
            "values" => Amenity::where('categoryAmenityId', 1)->get()
        ];
        $features = [
            "id" => 2,
            "values" => Amenity::where('categoryAmenityId', 2)->get()
        ];
        $location = [
            "id" => 3,
            "values" => Amenity::where('categoryAmenityId', 3)->get()
        ];
        $safety = [
            "id" => 4,
            "values" => Amenity::where('categoryAmenityId', 4)->get()
        ];
        return view('create-listing.house_amenities',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'ameniti'=>$ameniti,
            'essentials'=>$essentials,'features'=>$features,'location'=>$location,'safety'=>$safety,
            'listingId'=>$listingId]);
    }

    public function photos()
    {
        $listingId = $_POST['listingId'];

        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_photos',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing, 'listingId'=>$listingId]);
    }

    public function confirmation()
    {
        $listingId = $_POST['listingId'];

        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_confirmation',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification, 'listingId'=>$listingId]);
    }
    public function price()
    {
        $listingId = $_POST['listingId'];

        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('create-listing.house_price',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification, 'listingId'=>$listingId]);
    }

}
