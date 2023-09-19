<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SleepingPlace extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function addItem(){
        if(count(self::all()) === 0) {

            $sleepingPlaces = array(
                array(
                    'countSingleBeds' => 2,
                    'countDoubleBeds' => 1,
                    'countMattresses' => 0,
                )
            );
            foreach ($sleepingPlaces as $sleepingPlace){
                self::create($sleepingPlace);
            }
        }
    }
}
