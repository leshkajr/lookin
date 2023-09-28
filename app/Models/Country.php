<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function fillValues(){
        if(count(self::all()) === 0){
            $countries = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries"));
//            dd($countries->data[0]);


            foreach ($countries->data as $country) {
                if (!self::isExist(self::All(), $country->country)) {
                    $create_country = array(
                        'name' => $country->country,
                        'iso2' => strtolower($country->iso2),
                    );
                    $id = self::create($create_country)->id;

                    if($country->country !== "Ukraine"){
                        for ($i = 0; $i < 40; $i++) {
                            if(isset($country->cities[$i])){
                                $city = $country->cities[$i];

                                $postdata = http_build_query(array('city' => $city,));
                                $opts = array('http' =>
                                    array(
                                        'method'  => 'POST',
                                        'header'  => 'Content-Type: application/x-www-form-urlencoded',
                                        'content' => $postdata
                                    )
                                );
                                $context  = stream_context_create($opts);

                                $object_city = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries/population/cities", false, $context));
                                dd($object_city);
                                $create_city = array(
                                    'name' => $country->cities[$i],
                                    'countryId' => $id,
                                );
                                City::create($create_city);
                            }
                        }
                    }
                    else{
                        for ($i = 0; $i < count($country->cities); $i++) {
                            if(isset($country->cities[$i])){
                                $create_city = array(
                                    'name' => $country->cities[$i],
                                    'countryId' => $id,
                                );
                                City::create($create_city);
                            }
                        }
                    }
                }
            }
        }
    }

    static function isExist($countries, $t_country){
        foreach($countries as $country){
            if($t_country === "Russia"){
                // до коробля
                return true;
            }
            if($country->name === $t_country){
                return true;
            }
        }
        return false;
    }
}
