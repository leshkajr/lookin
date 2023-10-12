<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function addItem()
    {
        if (count(self::all()) === 0) {

            $addresses = array(
                array(
                    "firstLine" => "Modlyńska 2",
                    "secondLine" => "44",
                    "index" => "03-456",
                    "city" => "Warsaw",
                    "lat" => "52.237049",
                    "lon" => "21.017532",
                )
            );

            foreach ($addresses as $address) {
                self::create($address);
            }
        }
    }
}
