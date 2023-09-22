<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\AmenitiesListings;
use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Listing;
use App\Models\ObjectType;
use App\Models\PhotosPath;
use App\Models\SleepingPlace;
use App\Models\TypeListing;

class SetupController extends Controller
{
    public function index(){
        Country::fillValues();
        Language::fillValues();
        Currency::fillValues();
        TypeListing::fillValues();
        CategoryListing::fillValues();
        CategoryAmenity::fillValues();
        Amenity::fillValues();
        ObjectType::fillValues();


        Address::addItem();
        SleepingPlace::addItem();
        Listing::addItem();
        PhotosPath::addItem();
        AmenitiesListings::addItem();

        return redirect()->route('main');
    }
}
