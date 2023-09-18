<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\Currency;
use App\Models\Language;
use App\Models\TypeListing;
use Illuminate\Http\Request;

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
        return view('main.start',
            ['languages'=>$languages, 'currencies'=>$currencies, 'types_listings' => $types_listings,
                'amenities' => $amenities]);
    }
    public function account()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.account',['languages'=>$languages, 'currencies'=>$currencies,
        'categoriesListing'=>$categoriesListing,]);
    }
    public function message()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.message',['languages'=>$languages, 'currencies'=>$currencies,
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
}
