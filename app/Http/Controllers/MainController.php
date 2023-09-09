<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Language;
use App\Models\TypeListing;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $languages = Language::all();
        $currencies = Currency::all();

        return view('main.main',['languages'=>$languages, 'currencies'=>$currencies]);
    }

    public function start($countryName = null) {
        $languages = Language::all();
        $currencies = Currency::all();
        $types_listings = TypeListing::all();
        return view('main.start',['languages'=>$languages, 'currencies'=>$currencies, 'types_listings' => $types_listings]);
    }
}
