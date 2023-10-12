<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotosPath extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function addItem(){
        if(count(self::all()) === 0){
            $photosPaths = [
              [
                  'titlePhoto' => 'photo-listing',
                  'typeObjectId' => 1,
                  'objectId' => 1,
                  'path' => 'images/listing-photos/listing1_1.png'
              ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/listing-photos/listing1_2.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/listing-photos/listing1_3.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/listing-photos/listing1_4.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/listing-photos/listing1_5.png'
                ],


                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 2,
                    'path' => 'images/listing-photos/listing2.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 3,
                    'path' => 'images/listing-photos/listing3.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 4,
                    'path' => 'images/listing-photos/listing4.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 5,
                    'path' => 'images/listing-photos/listing5.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 6,
                    'path' => 'images/listing-photos/listing6.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 7,
                    'path' => 'images/listing-photos/listing7.png'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 8,
                    'path' => 'images/listing-photos/listing8.png'
                ],

            ];

            foreach ($photosPaths as $path) {
                self::create($path);
            }
        }
    }
}
