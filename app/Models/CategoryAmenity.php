<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryAmenity extends Model
{
    use HasFactory;

    protected $guarded = [];


    static function fillValues()
    {
        if (count(self::all()) === 0) {
            $categoriesAmenities = array(
                array(
                    'nameCategoryAmenity' => 'beach',
                ),

            );

            foreach ($categoriesAmenities as $category) {
                self::create($category);
            }
        }
    }
}
