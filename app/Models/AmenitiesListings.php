<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitiesListings extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function addItem(){
        if(count(self::all()) === 0){
            $amenitiesListings = [
                [
                    'listingId' => 1,
                    'amenityId' => 1,
                ],
                [
                    'listingId' => 1,
                    'amenityId' => 2,
                ],
                [
                    'listingId' => 1,
                    'amenityId' => 3,
                ],
                [
                    'listingId' => 1,
                    'amenityId' => 4,
                ],
                [
                    'listingId' => 1,
                    'amenityId' => 5,
                ],
            ];

            foreach ($amenitiesListings as $amenity){
                self::create($amenity);
            }
        }
    }
}
