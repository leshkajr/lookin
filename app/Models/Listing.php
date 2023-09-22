<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];


    static function addItem(){
        if(count(self::all()) === 0) {

            $listings = array(
                array(
                    'title' => 'Затишна квартира біля центра',
                    'description' => '«Приголомшливі» ложі у верхньому регіоні відпочинку Кляйнарль дуже великодушні, повністю обладнані та орієнтовані на південь. Насолоджуйтеся достатньою кількістю місця, справжнім комфортом і сонячним видом на пішохідну та лижну зону, яка починається прямо перед будинком.
Помешкання
Кавомашина Повністю автоматична з квасолею +
власна сауна для кожної ложі з панорамним вікном на відкритій території +
безкоштовний WiFi +
повністю обладнана кухня з посудом, склянками, кухонним посудом, електричною плитою з духовкою, посудомийною машиною, чайними рушниками, чайником
сейф, телевізор з плоским екраном у вітальні та спальні +
Рушники, халати (за замовленням) +
ліжечко в оренду за замовленням +
лижна кімната з сушаркою для чобіт +
балкон з чудовим панорамним видом на гори
Доступ для гостей
Зима
SKIraum: недалеко від схилів, центру міста, вільний вхід до Wasserwelt
Літо: пішохідні стежки починаються прямо біля ваших дверей, безкоштовний вхід до Wasserwelt
Інші важливі речі
З нетерпінням чекаємо на вашу зустріч.
Реєстраційний номер
50414-010005-2020',
                    'hostId' => 1,
                    'categoryId' => 3,
                    'typeId' => 1,
                    'rating' => 0,
                    'countRooms' => 2,
                    'countBathrooms' => 1,
                    'priceForNight' => 50,
                    'priceCleaning' => 10,
                    'discountWeek' => 10,
                    'discountMonth' => 35,
                    'sleepingPlacesId' => 1,
                    'isAvailable' => true,
                    'isPublic' => true,
                    'isAlone' => true,
                    'isAnimals' => false,
                    'countryId' => 213,
                    'cityId' => 4676,
                    'addressId' => 1,
                )
            );

            foreach ($listings as $listing) {
                self::create($listing);
            }
        }
    }
}
