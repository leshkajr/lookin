<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjectType extends Model
{
    use HasFactory;

    protected $guarded = [];


    static function fillValues(){
        if(count(self::all()) === 0) {

            $objectTypes = array(
                array(
                    'nameType' => 'Listing',
                ),
                array(
                    'nameType' => 'User',
                )
            );
            foreach ($objectTypes as $objectType){
                self::create($objectType);
            }
        }
    }
}
