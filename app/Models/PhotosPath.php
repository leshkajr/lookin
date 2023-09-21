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
                  'path' => 'images/start-large-photos/photo1.jpg'
              ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/start-large-photos/photo2.jpg'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/start-large-photos/photo3.jpg'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/start-large-photos/photo4.jpg'
                ],
                [
                    'titlePhoto' => 'photo-listing',
                    'typeObjectId' => 1,
                    'objectId' => 1,
                    'path' => 'images/start-large-photos/photo5.jpg'
                ],

            ];

            foreach ($photosPaths as $path) {
                self::create($path);
            }
        }
    }
}
