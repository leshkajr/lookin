<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        if(count(Language::all()) === 0){
            Language::fillValues();
        }

        $languages = Language::all();

        return view('main.main',['languages'=>$languages]);
    }
}
