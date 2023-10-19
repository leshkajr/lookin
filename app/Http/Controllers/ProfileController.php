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




}
