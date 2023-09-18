<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function fillValues(){
        if(count(self::all()) === 0){
            $languages = array(
                array(
                    'languageCode' => 'en',
                    'languageName' => 'English',
                    'languageNameOnEnglish' => 'english',
                    'countryCode' => 'us',
                    'countryName' => 'United States',
                ),
                array(
                    'languageCode' => 'ua',
                    'languageName' => 'Українська',
                    'languageNameOnEnglish' => 'ukrainian',
                    'countryCode' => 'ua',
                    'countryName' => 'Україна',
                ),
            );

            $countries = json_decode(file_get_contents("https://restcountries.com/v3.1/all"));
            foreach ($countries as $country){
                if($country->name !== 'Ukraine' || $country->name !== 'USA'){
                    if(property_exists($country,'languages')){
                        $country_languages = $country->languages;
                        $key_language = key($country_languages);
                        $name = $country->name->common;
                        if(!self::isExist($languages,$country_languages->{$key_language})) {
                            $language = array(
                                'languageCode' => null,
                                'languageName' => $country_languages->{$key_language},
                                'languageNameOnEnglish' => strtolower($country_languages->{$key_language}),
                                'countryCode' => null,
                                'countryName' => $name,
                            );
                            array_push($languages, $language);
                        }
                    }
                }
            }
            dd($languages);
            foreach($languages as $language){
                self::create($language);
            }
        }
    }

    static function isExist($languages, $t_language){
        foreach($languages as $language){
            if($language['languageName'] === $t_language){
                return true;
            }
        }
        return false;
    }
}
