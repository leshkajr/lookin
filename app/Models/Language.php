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
                    'languageNameNative' => 'English',
                    'languageNameOnEnglish' => 'english',
                    'countryCode' => 'us',
                    'countryName' => 'United States',
                    'countryNameNative' => 'United States',
                ),
                array(
                    'languageCode' => 'ua',
                    'languageName' => 'Ukrainian',
                    'languageNameNative' => 'Українська',
                    'languageNameOnEnglish' => 'ukrainian',
                    'countryCode' => 'ua',
                    'countryName' => 'Ukraine',
                    'countryNameNative' => 'Україна',
                ),
            );

            $countries = json_decode(file_get_contents("https://restcountries.com/v3.1/all"));
            foreach ($countries as $country){
                if(property_exists($country,'languages')){
                    $country_languages = $country->languages;
                    $key_language = key($country_languages);
                    $name = $country->name->common;

                    if (!self::isExist($languages, strtolower($country_languages->{$key_language}))) {
                        $language = array(
                            'languageCode' => null,
                            'languageName' => $country_languages->{$key_language},
                            'languageNameNative' => null,
                            'languageNameOnEnglish' => strtolower($country_languages->{$key_language}),
                            'countryCode' => null,
                            'countryName' => $name,
                            'countryNameNative' => null,
                        );
                        array_push($languages, $language);
                    }
                }
            }
            foreach($languages as $language){
                self::create($language);
            }
        }
    }

    static function isExist($languages, $t_language){
        foreach($languages as $language){
            if($t_language === "russian"){
                // до коробля
                return true;
            }
            if($language['languageNameOnEnglish'] === $t_language){
                return true;
            }
        }
        return false;
    }
}
