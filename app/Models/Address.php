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
                    "firstLine" => "Ukrainska 2",
                    "secondLine" => "14",
                    "index" => "50000",
                    "city" => "Kryvyi Rih",
                )
            );

            foreach ($addresses as $address) {
                self::create($address);
            }
        }
    }
}
