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
                    $create_country = array(
                        'name' => $country->country,
                        'iso2' => strtolower($country->iso2),
                    );
                    $id = self::create($create_country)->id;
                    $cities = json_decode(file_get_contents("http://api.geonames.org/searchJSON?country=".$country->iso2."&featureClass=P&username=oleksii.ihnatenko"));
                    if(isset($cities->geonames)){
                        $cities = $cities->geonames;
//                    usort($cities, function($a, $b) {
//                        if($a->population > $b->population) return 1;
//                        else return 0;
//                    });
//                    if($country->country === 'Ukraine'){
//                        dd($cities);
//                    }
                    if(count($cities) < 50) {
                        $countCities = count($cities);
                    }
                    else {
                        $countCities = 50;
                    }

                    for ($i = 0; $i < $countCities; $i++) {
                        if($cities[$i]->population > 150000){
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
