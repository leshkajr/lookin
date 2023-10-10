<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use JsonException;

class ApiController extends Controller
{
    /**
     * @throws JsonException
     */
    public function getLocation()
    {



        $location = array();
        if(isset($_GET['text'])){
            $city_name = $_GET['text'];
            foreach(Country::all() as $country){
                if(str_contains(strtolower($country->name), strtolower($city_name))){
                    $location[] = array(
                        'id' => $country->id,
                        'type' => 'country',
                        'name' => $country->name
                    );
                    foreach(City::where('countryId',$country->id)->get() as $city){
                        $location[] = array(
                            'id' => $city->id,
                            'type' => 'city',
                            'name' => $city->name,
                            'name_country' => $country->name,
                        );
                    }
                }
            }

            foreach(City::all() as $city){
                if(str_contains(strtolower($city->name), strtolower($city_name))){
                    $location[] = array(
                        'id' => $city->id,
                        'type' => 'city',
                        'name' => $city->name,
                        'name_country' => Country::find($city->countryId)->name,
                    );
                }
            }


        }
        $json = json_encode($location, JSON_THROW_ON_ERROR);
        return $json !== false ? $json : "not found";
    }

    function getCityFromIp(){
        if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];

            return ['latitude' => $latitude,'longitude' => $longitude];
        } else {
            return "Не удалось получить координаты.";
        }
    }

    function changePropertyUser(){
        if (isset($_POST['userId'], $_POST['propertyName'], $_POST['propertyText'])) {
            $userId = $_POST['userId'];
            $propertyName = $_POST['propertyName'];
            $propertyText = $_POST['propertyText'];
            $user = User::find($userId);
            if($propertyName === 'name'){
                $names = explode(';',$propertyText);
                $user->name = $names[0];
                $user->lastName = $names[1];
            }
            else if($propertyName === 'email'){
                $user->email = $_POST['propertyText'];
            }
            else if($propertyName === 'numberPhone'){
                $user->numberPhone = $_POST['propertyText'];
            }

            $user->update();

            return "ok";
        } else {
            return "Не удалось получить координаты.";
        }
    }
}
