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

            foreach ($countries->data as $country) {
                if (!self::isExist(self::All(), $country->country)) {
                    $create_country = array(
                        'name' => $country->country,
                        'iso2' => strtolower($country->iso2),
                    );
                    $id = self::create($create_country)->id;
                    $cities = json_decode(file_get_contents("http://api.geonames.org/searchJSON?country=".$country->iso2."&featureClass=P&username=oleksii.ihnatenko"))->geonames;

                    usort($cities, function($a, $b) { return -1 * strcmp($a->population, $b->population); });
                    if(count($cities) < 20) {
                        $countCities = count($cities);
                    }
                    else {
                        $countCities = 20;
                    }

                    for ($i = 0; $i < $countCities; $i++) {
                        $create_city = array(
                            'name' => $cities[$i]->name,
                            'countryId' => $id,
                        );
                        City::create($create_city);
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
