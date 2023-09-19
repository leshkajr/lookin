<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function addItem(){
        if(count(self::all()) === 0) {

            $listings = array(
                array(
                    'title' => 'Затишна квартира біля центра',
                    'description' => 'Затишна квартира біля центра, запрошуємо.',
                    'hostId' => 1,
                    'categoryId' => 3,
                    'typeId' => 1,
                    'rating' => 0,
                    'countRooms' => 2,
                    'countBathrooms' => 1,
                    'priceForNight' => 50,
                    'priceCleaning' => 10,
                    'discountWeek' => 10,
                    'discountMonth' => 35,
                    'sleepingPlacesId' => 1,
                    'isAvailable' => true,
                    'isPublic' => true,
                    'isAlone' => true,
                    'isAnimals' => false,
                    'countryId' => 213,
                    'cityId' => 4676,
                    'addressId' => 1,
                )
            );

            foreach ($listings as $listing) {
                self::create($listing);
            }
        }
    }
}
