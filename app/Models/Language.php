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
                    'countryCode' => 'us',
                    'countryName' => 'United States',
                ),
                array(
                    'languageCode' => 'ua',
                    'languageName' => 'Українська',
                    'countryCode' => 'ua',
                    'countryName' => 'Україна',
                )
            );

            foreach($languages as $language){
                self::create($language);
            }
        }
    }
}
