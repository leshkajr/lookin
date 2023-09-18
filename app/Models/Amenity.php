<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function fillValues()
    {
        $categoriesAmenities = CategoryAmenity::all();
        $categoryEssentialsId = $categoriesAmenities->firstWhere('nameCategoryAmenity','essentials')->id;
        $categoryFeaturesId = $categoriesAmenities->firstWhere('nameCategoryAmenity','features')->id;
        $categoryLocationId = $categoriesAmenities->firstWhere('nameCategoryAmenity','location')->id;
        $categorySafetyId = $categoriesAmenities->firstWhere('nameCategoryAmenity','safety')->id;
        if (count(self::all()) === 0) {
            $amenities = array(
                array(
                    'nameAmenity' => 'wifi',
                    'categoryAmenityId' => $categoryEssentialsId,
                    'iconPath' => 'images/amenities-svg/wifi.svg',
                ),
                array(
                    'nameAmenity' => 'washer',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),
                array(
                    'nameAmenity' => 'air_conditioning',
                    'categoryAmenityId' => $categoryEssentialsId,
                    'iconPath' => 'images/amenities-svg/snowflake.svg',
                ),
                array(
                    'nameAmenity' => 'dedicated_workspace',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),
                array(
                    'nameAmenity' => 'hair_dryer',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),
                array(
                    'nameAmenity' => 'kitchen',
                    'categoryAmenityId' => $categoryEssentialsId,
                    'iconPath' => 'images/amenities-svg/kitchen.svg',
                ),
                array(
                    'nameAmenity' => 'dryer',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),
                array(
                    'nameAmenity' => 'heating',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),
                array(
                    'nameAmenity' => 'tv',
                    'categoryAmenityId' => $categoryEssentialsId,
                    'iconPath' => 'images/amenities-svg/tv.svg',
                ),
                array(
                    'nameAmenity' => 'iron',
                    'categoryAmenityId' => $categoryEssentialsId,
                ),



                array(
                    'nameAmenity' => 'pool',
                    'categoryAmenityId' => $categoryFeaturesId,
                    'iconPath' => 'images/amenities-svg/swimming-pool.svg',
                ),
                array(
                    'nameAmenity' => 'free_parking',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'crib',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'bbq_grill',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'indoor_fireplace',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'hot_tub',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'ev_charger',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'gym',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'breakfast',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),
                array(
                    'nameAmenity' => 'smoking_allowed',
                    'categoryAmenityId' => $categoryFeaturesId,
                ),


                array(
                    'nameAmenity' => 'beachfront',
                    'categoryAmenityId' => $categoryLocationId,
                ),
                array(
                    'nameAmenity' => 'waterfront',
                    'categoryAmenityId' => $categoryLocationId,
                ),


                array(
                    'nameAmenity' => 'smoke_alarm',
                    'categoryAmenityId' => $categorySafetyId,
                ),
                array(
                    'nameAmenity' => 'carbon_monoxide_alarm',
                    'categoryAmenityId' => $categorySafetyId,
                ),
            );

            foreach ($amenities as $amenity) {
                self::create($amenity);
            }
        }
    }
}
