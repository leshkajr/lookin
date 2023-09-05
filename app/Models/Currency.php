<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function fillValues(){
        if(count(self::all()) === 0){
            $currencies = array(
                array(
                    'currencyCodeISO4217' => '840',
                    'currencyName' => 'American dollar',
                    'currencyCode' => 'USD',
                    'currencyToken' => '$',
                ),
                array(
                    'currencyCodeISO4217' => '978',
                    'currencyName' => 'Euro',
                    'currencyCode' => 'EUR',
                    'currencyToken' => '€',
                ),
                array(
                    'currencyCodeISO4217' => '980',
                    'currencyName' => 'Hrywna',
                    'currencyCode' => 'UAH',
                    'currencyToken' => '₴',
                ),
                array(
                    'currencyCodeISO4217' => '840',
                    'currencyName' => 'Złoty',
                    'currencyCode' => 'PLN',
                    'currencyToken' => 'zł',
                )
            );

            foreach($currencies as $currency){
                self::create($currency);
            }
        }
    }
}
