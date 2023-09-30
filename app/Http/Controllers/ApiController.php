<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use JsonException;

class ApiController extends Controller
{
    /**
     * @throws JsonException
     */
    public function getLocation()
    {

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.dev.me/v1-list-countries', [
            'headers' => [
                'Accept' => 'application/json',
                'x-api-key' => '65144ed14de6eb3caadc6a6d-d96439bd717c',
            ],
        ]);

        $object_city = json_decode($response->getBody());
        dd($object_city->list[0]);
//        $city = "Kharkiv";
//
//        $postdata = http_build_query(array('city' => $city,));
//        $opts = array('http' =>
//            array(
//                'method'  => 'POST',
//                'header'  => 'Content-Type: application/x-www-form-urlencoded',
//                'content' => $postdata
//            )
//        );
//        $context  = stream_context_create($opts);
//
//        $object_city = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries/population/cities", false, $context));
//        dd($object_city);

//        $location = array();
//        if(isset($_GET['text'])){
//            foreach(Country::all() as $country){
//                if(str_contains(strtolower($country->name), strtolower($_GET['text']))){
//                    $location[] = array(
//                        'id' => $country->id,
//                        'type' => 'country',
//                        'name' => $country->name
//                    );
//                    foreach(City::where('countryId',$country->id)->get() as $city){
//                        $location[] = array(
//                            'id' => $city->id,
//                            'type' => 'city',
//                            'name' => $city->name,
//                            'name_country' => $country->name,
//                        );
//                    }
//                }
//            }
//
//            foreach(City::all() as $city){
//                if(str_contains(strtolower($city->name), strtolower($_GET['text']))){
//                    $location[] = array(
//                        'id' => $city->id,
//                        'type' => 'city',
//                        'name' => $city->name,
//                        'name_country' => Country::find($city->countryId)->name,
//                    );
//                }
//            }
//
//
//        }
//        dd($location);
//        $json = json_encode($location, JSON_THROW_ON_ERROR);
//        return $json !== false ? $json : "not found";
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
}
