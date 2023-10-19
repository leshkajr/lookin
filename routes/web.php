<?php

use App\Http\Controllers\CreateListingController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\HostController;

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
Route::get('/loadListings', [SetupController::class, 'loadListings'])->name('loadListings');


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

    Route::get('/account',[MainController::class,'account'])->name('account');
    Route::get('/account/personal_data',[ProfileController::class,'personal_data'])->name('account.personal_data');
    Route::get('/account/verification',[ProfileController::class,'personal_verification'])->name('account.verification');
    Route::get('/account/profile',[ProfileController::class,'profils'])->name('account.profile');
    Route::get('/account/notification',[ProfileController::class,'notification'])->name('account.notification');

    Route::prefix('become-a-host')->group(function () {
        Route::get('',[CreateListingController::class,'start'])->name('create-listing.start');
        Route::post('/category',[CreateListingController::class,'category'])->name('create-listing.category');
        Route::post('/type',[CreateListingController::class,'type'])->name('create-listing.type');
        Route::post('/name',[CreateListingController::class,'name'])->name('create-listing.name');
        Route::post('/description',[CreateListingController::class,'description'])->name('create-listing.description');
        Route::post('/location',[CreateListingController::class,'location'])->name('create-listing.location');
        Route::post('/information',[CreateListingController::class,'information'])->name('create-listing.information');
        Route::post('/amenities',[CreateListingController::class,'amenities'])->name('create-listing.amenities');
        Route::post('/photos',[CreateListingController::class,'photos'])->name('create-listing.photos');
        Route::post('/confirmation',[CreateListingController::class,'confirmation'])->name('create-listing.confirmation');
        Route::post('/price',[CreateListingController::class,'price'])->name('create-listing.price');
    });

   // Route::get('/advertisement',[ProfileController::class,'advertisement'])->name('profile.house_advertisement');
    Route::prefix('host')->group(function (){
        Route::get('',[HostController::class,'index'])->name('host');
        Route::get('/listings/control',[HostController::class,'listings'])->name('host.listings');
    });

});

// Localization

Route::get('locale/{lange}',[LocalizationController::class,'setLang'])->name('locale.setLocale');


require __DIR__.'/auth.php';

Route::controller(\App\Http\Controllers\ApiController::class)->group(function () {
    Route::get('/api/location', 'getLocation');
    Route::get('/api/getCities', 'getCities');
    Route::get('/api/cityfromip', 'getCityFromIp');
    Route::post('/api/changepropertyuser', 'changePropertyUser');
    Route::post('/api/changepropertylisting', 'changePropertyListing');
    Route::post('/api/loadImage', 'loadImage');
});
