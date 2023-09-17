<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\Currency;
use App\Models\Language;
use App\Models\TypeListing;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index(){
        Language::fillValues();
        Currency::fillValues();
        TypeListing::fillValues();
        CategoryListing::fillValues();
        CategoryAmenity::fillValues();
        Amenity::fillValues();

        return redirect()->route('main');
    }
}
