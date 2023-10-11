<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Amenity;
use App\Models\CategoryListing;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\TypeListing;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function favorite()
    {
        Language::fillValues();
        $languages = Language::all();

        Currency::fillValues();
        $currencies = Currency::all();
        return view('profile.favorite',['languages'=>$languages, 'currencies'=>$currencies]);
    }

    public function notification()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.notification',['languages'=>$languages, 'currencies'=>$currencies,
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
    public function house_type1()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $typesListing = TypeListing::all();

        return view('profile.house_type1',['languages'=>$languages, 'currencies'=>$currencies,
            'typesListing'=>$typesListing,]);
    }
    public function house_location()
    {
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

        return view('profile.house_location',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing, 'cities'=>$cities,'countries'=>$countries,
            'choose_country_id'=>$choose_country_id]);
    }
    public function house_information()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.house_information',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function personal_data()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        $user=User::find(Auth::id());

        return view('profile.personal_data',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'user'=>$user]);
    }
    public function personal_verification()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.personal_verification',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function profils()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();
        $user = Auth::user();

        return view('profile.profils',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification,'user'=>$user]);
    }
    public function house_amenities()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();
        $ameniti =Amenity::all();
        $essentials = Amenity::where('categoryAmenityId', 1)->get();
        $features= Amenity::where('categoryAmenityId', 2)->get();
        $location= Amenity::where('categoryAmenityId', 3)->get();
        $safety= Amenity::where('categoryAmenityId', 4)->get();
        return view('profile.house_amenities',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification,'ameniti'=>$ameniti,'essentials'=>$essentials,'features'=>$features,'location'=>$location,'safety'=>$safety]);
    }

    public function photo_house()
    {

        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.photo_house',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }

    public function opisaniye()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.house_opisaniye',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function first_stay()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.first_stay',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }
    public function house_price()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.house_price',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }

    public function house_quest()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();

        return view('profile.house_quest',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }

    public function house_name()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $verification=User::all();
        $categoriesListing = CategoryListing::all();


        return view('profile.house_name',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'verification'=>$verification]);
    }

}
