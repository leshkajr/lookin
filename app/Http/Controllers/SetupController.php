<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
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

        return redirect()->route('main');
    }
}
