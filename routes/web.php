<?php

use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SetupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/setup', [SetupController::class, 'index'])->name('setup');


Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/search', [MainController::class, 'index'])->name('main.search');
Route::get('/rooms', [MainController::class, 'rooms'])->name('main.rooms');

Route::get('/country', [MainController::class, 'start'])->name('main.country');
Route::get('/country/{countryName?}', [MainController::class, 'start'])->name('main.country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/favorite',[ProfileController::class,'favorite'])->name('profile.favorite');

    Route::get('/account',[MainController::class,'account'])->name('profile.account');
    Route::get('/house_type',[ProfileController::class,'house_type'])->name('profile.house_type');
    Route::get('/house_type1',[ProfileController::class,'house_type1'])->name('profile.house_type1');
    Route::get('/notification',[ProfileController::class,'notification'])->name('profile.notification');
    Route::get('/location',[ProfileController::class,'house_location'])->name('profile.house_location');
    Route::get('/information',[ProfileController::class,'house_information'])->name('profile.house_information');
    Route::get('/personal_data',[ProfileController::class,'personal_data'])->name('personal_data');
    Route::get('/verification',[ProfileController::class,'personal_verification'])->name('personal_verification');
    Route::get('/profils',[ProfileController::class,'profils'])->name('profile.profils');
    Route::get('/amenities',[ProfileController::class,'house_amenities'])->name('house_amenities');
    Route::get('/photo_house',[ProfileController::class,'photo_house'])->name('profile.photo_house');
    Route::get('/opisaniye',[ProfileController::class,'opisaniye'])->name('profile.house_opisaniye');
    Route::get('/first_stay',[ProfileController::class,'first_stay'])->name('profile.first_stay');
    Route::get('/house_price',[ProfileController::class,'house_price'])->name('profile.house_price');
    Route::get('/house_quest',[ProfileController::class,'house_quest'])->name('profile.house_quest');

});

// Localization

Route::get('locale/{lange}',[LocalizationController::class,'setLang']);
Route::get('/account',[MainController::class,'account'])->name('profile.account');



require __DIR__.'/auth.php';

Route::controller(\App\Http\Controllers\ApiController::class)->group(function () {
    Route::get('/api/location', 'getLocation');
    Route::get('/api/cityfromip', 'getCityFromIp');
});
