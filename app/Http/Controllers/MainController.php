<?php

namespace App\Http\Controllers;

use App\Models\AmenitiesListings;
use App\Models\Amenity;
use App\Models\CategoryAmenity;
use App\Models\CategoryListing;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\LikesListing;
use App\Models\Listing;
use App\Models\PhotosPath;
use App\Models\TypeListing;
use App\Models\User;
use Illuminate\Http\Request;
use DateTime;

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

    public function rooms(){

        $listing_db = Listing::find(1);

        $listing = [
            'title' => $listing_db->title, 'description' => $listing_db->description, 'hostId' => $listing_db->hostId, 'categoryId' => $listing_db->categoryId, 'typeId' => $listing_db->typeId, 'rating' => $listing_db->rating, 'countReviews' => $listing_db->countReviews, 'countRooms' => $listing_db->countRooms, 'countBathrooms' => $listing_db->countBathrooms, 'countLikes' => $listing_db->countLikes, 'priceForNight' => $listing_db->priceForNight, 'priceCleaning' => $listing_db->priceCleaning, 'discountWeek' => $listing_db->discountWeek, 'discountMonth' => $listing_db->discountMonth, 'mixRent' => $listing_db->mixRent, 'maxRent' => $listing_db->maxRent, 'needsConfirmFromHost' => $listing_db->needsConfirmFromHost, 'sleepingPlacesId' => $listing_db->sleepingPlacesId, 'isAvailable' => $listing_db->isAvailable, 'isPublic' => $listing_db->isPublic, 'isAlone' => $listing_db->isAlone, 'isAnimals' => $listing_db->isAnimals, 'countryId' => $listing_db->countryId, 'cityId' => $listing_db->cityId, 'addressId' => $listing_db->addressId, 'created_at' => $listing_db->created_at, 'updated_at' => $listing_db->updated_at,
        ];

        //diff day
        $start_datetime = new DateTime($listing_db->created_at);
        $diff = $start_datetime->diff(new DateTime());
        $listing += [
          'diffDay' => $diff->d,
        ];

        //country and city
        $country = [
            'id' => $listing_db->countryId,
            'name' => Country::find($listing_db->countryId)->name,
        ];
        $city = [
            'id' => $listing_db->cityId,
            'name' => City::find($listing_db->cityId)->name,
        ];
        $listing += [
            'country' => $country,
            'city' => $city,
        ];

        //photos
        $photos = PhotosPath::where('objectId',$listing_db->id)->get();
        $listing += [
            'photos' => $photos
        ];

        //isLike
        $likesListing = LikesListing::where(['listingId' => $listing_db->id, 'userId' => auth()->id()])->get();
        if(count($likesListing) === 0){
            $listing += [
                'isLike' => false
            ];
        }
        else{
            $listing += [
                'isLike' => true
            ];
        }

        //typeListing
        $typeListing = TypeListing::find($listing_db->typeId);
        $listing += [
            'type' => $typeListing,
        ];

        // host
        $listing += [
            'user' => User::find($listing_db->hostId),
        ];

        // amenities
        $amenitiesListing = AmenitiesListings::where('listingId', $listing_db->id)->get();
        $amenities = array();
        foreach ($amenitiesListing as $amenityListing){
            array_push($amenities,Amenity::find($amenityListing->amenityId));
        }
        $listing += [
            'amenities' => $amenities,
        ];

//        dd($listing);

        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $types_listings = TypeListing::all();
        $amenities = Amenity::all();
        $categoriesAmenities = CategoryAmenity::all();

        return view('main.listing',
            ['languages'=>$languages, 'currencies'=>$currencies, 'categoriesListing'=>$categoriesListing,
                'types_listings' => $types_listings,'amenities' => $amenities, 'categoriesAmenities'=>$categoriesAmenities,
                'listing'=>$listing]);

    }

    public function account()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.account',['languages'=>$languages, 'currencies'=>$currencies,
        'categoriesListing'=>$categoriesListing,]);
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

        $categoriesListing = CategoryListing::all();

        return view('profile.house_type1',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
    public function house_location()
    {
        $languages = Language::all();
        $currencies = Currency::all();

        $categoriesListing = CategoryListing::all();

        return view('profile.house_location',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
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

        return view('profile.personal_data',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,]);
    }
}
