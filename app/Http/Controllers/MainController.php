<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Language;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        Language::fillValues();
        $languages = Language::all();

        Currency::fillValues();
        $currencies = Currency::all();

        return view('main.main',['languages'=>$languages, 'currencies'=>$currencies]);
    }
}
