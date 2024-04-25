<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});





Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'index')->name('trips.index');
    Route::get('/trips/{id}', 'show')->name('trips.show');
});

Route::get('/trips/{trip}/edit', [TripController::class, 'edit'])->name('trips.edit'); 
Route::put('/trips/{trip}', [TripController::class, 'update'])->name('trips.update'); 

Route::resource('countries', CountryController::class);
