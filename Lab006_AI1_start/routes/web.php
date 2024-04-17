<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/trips', 'App\Http\Controllers\TripController@index');
//Route::get('/trips/{id}', 'App\Http\Controllers\TripController@show')->name('trips.show');


Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'cheapestTrips');
    Route::get('/trips/{id}', 'show')->name('trips.show');
});