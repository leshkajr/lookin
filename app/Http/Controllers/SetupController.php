<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Language;
use App\Models\TypeListing;
use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index(){

        Currency::fillValues();
        Language::fillValues();
        TypeListing::fillValues();

        return redirect()->route('main');
    }
}
