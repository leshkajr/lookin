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
                    'title' => 'Java або Zen - ексклюзивний котедж в оточенні тиші',
                    'description' => 'Котедж стоїть на лугах між Карконоше і Яновичами горами. Луги і птахи щебечуть. Вас зустрінуть чашкою кави на просторій терасі з видом на траву, як плот на морі. Коли йде дощ, ви сидите біля вікна з видом на «снігопад». У зимові вечори ви запалюєте камін, а влітку сидите біля камінів і сверчок. Нудно? Можливо. Але нудьга змушує тебе не хотіти виїжджати!',
                    'hostId' => 1,
                    'categoryId' => 2,
                    'typeId' => 1,
                    'rating' => 4.8,
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
                    'countryId' => 169,
                    'cityId' => 1292,
                    'addressId' => 1,
                ),
            );

            foreach ($listings as $listing) {
                self::create($listing);
            }
        }
    }
}
