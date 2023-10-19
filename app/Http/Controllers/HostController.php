<?php

namespace App\Http\Controllers;

use App\Models\AmenitiesListings;
use App\Models\Amenity;
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
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HostController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $user = Auth::user();
        $hostListings = Listing::where('hostId', Auth::id())->get();

        $listings = array();
        foreach ($hostListings as $listing_db){
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
//            $likesListing = LikesListing::where(['listingId' => $listing_db->id, 'userId' => auth()->id()])->get();
//            if(count($likesListing) === 0){
//                $listing += [
//                    'isLike' => false
//                ];
//            }
//            else{
//                $listing += [
//                    'isLike' => true
//                ];
//            }

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

            array_push($listings,$listing);
        }




        return view('host.house_advertisement',['languages'=>$languages, 'currencies'=>$currencies,
            'categoriesListing'=>$categoriesListing,'user'=>$user,'hostListings' => $listings]);
    }

    function listings(){

        $languages = Language::all();
        $currencies = Currency::all();
        $categoriesListing = CategoryListing::all();
        $user = Auth::user();
        $hostListings = Listing::where('hostId', Auth::id())->get();


        $listings = array();
        foreach ($hostListings as $listing_db){
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
//            $likesListing = LikesListing::where(['listingId' => $listing_db->id, 'userId' => auth()->id()])->get();
//            if(count($likesListing) === 0){
//                $listing += [
//                    'isLike' => false
//                ];
//            }
//            else{
//                $listing += [
//                    'isLike' => true
//                ];
//            }

            //typeListing
            $typeListing = TypeListing::find($listing_db->typeId);
            $listing += [
                'type' => $typeListing,
            ];

            //categoryListing
            $categoryListing = CategoryListing::find($listing_db->categoryId);
            $listing += [
                'category' => $categoryListing,
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

            array_push($listings,$listing);
        }


        return view('host.listings_control',['languages'=>$languages, 'currencies'=>$currencies,
            'hostListings' => $listings]);
    }
}
