<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryListing extends Model
{
    use HasFactory;
    protected $guarded = [];

    static function fillValues()
    {
        if (count(self::all()) === 0) {
            $categoriesListings = array(
                array(
                    'nameCategoryListing' => 'beach',
                    'iconPath' => 'images/categories-svg/beach.svg',
                ),
                array(
                    'nameCategoryListing' => 'forest',
                    'iconPath' => 'images/categories-svg/forest.svg',
                ),
                array(
                    'nameCategoryListing' => 'mountains',
                    'iconPath' => 'images/categories-svg/mountains.svg',
                ),
                array(
                    'nameCategoryListing' => 'city',
                    'iconPath' => 'images/categories-svg/city.svg',
                ),
                array(
                    'nameCategoryListing' => 'lake',
                    'iconPath' => 'images/categories-svg/lake.svg',
                ),
                array(
                    'nameCategoryListing' => 'hotel',
                    'iconPath' => 'images/categories-svg/hotel.svg',
                ),
                array(
                    'nameCategoryListing' => 'farm',
                    'iconPath' => 'images/categories-svg/farm.svg',
                ),
                array(
                    'nameCategoryListing' => 'camping',
                    'iconPath' => 'images/categories-svg/camping.svg',
                ),
                array(
                    'nameCategoryListing' => 'wheels',
                    'iconPath' => 'images/categories-svg/wheels.svg',
                ),
                array(
                    'nameCategoryListing' => 'yacht',
                    'iconPath' => 'images/categories-svg/yacht.svg',
                ),
                array(
                    'nameCategoryListing' => 'history',
                    'iconPath' => 'images/categories-svg/history.svg',
                ),
                array(
                    'nameCategoryListing' => 'futurism',
                    'iconPath' => 'images/categories-svg/futurism.svg',
                ),
                array(
                    'nameCategoryListing' => 'insta-location',
                    'iconPath' => 'images/categories-svg/insta-location.svg',
                ),
                array(
                    'nameCategoryListing' => 'airport',
                    'iconPath' => 'images/categories-svg/airport.svg',
                ),

            );

            foreach ($categoriesListings as $category) {
                self::create($category);
            }
        }
    }
}
