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
    Route::get('/house_type',[MainController::class,'house_type'])->name('profile.house_type');
    Route::get('/house_type1',[MainController::class,'house_type1'])->name('profile.house_type1');
    Route::get('/notification',[MainController::class,'notification'])->name('profile.notification');
    Route::get('/location',[MainController::class,'house_location'])->name('profile.house_location');
    Route::get('/information',[MainController::class,'house_information'])->name('profile.house_information');
    Route::get('/personal_data',[MainController::class,'personal_data'])->name('personal_data');
    Route::get('/verification',[MainController::class,'personal_verification'])->name('personal_verification');

});

// Localization

Route::get('locale/{lange}',[LocalizationController::class,'setLang']);
Route::get('/account',[MainController::class,'account'])->name('profile.account');

require __DIR__.'/auth.php';

Route::controller(\App\Http\Controllers\ApiController::class)->group(function () {
    Route::get('/api/location', 'getLocation');
});
