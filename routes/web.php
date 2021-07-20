<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// endpoint check ongkir
Route::namespace('Api')->group(function () {
    Route::get('/', 'CheckOngkirController@index');
    Route::post('/', 'CheckOngkirController@check_ongkir');
    Route::get('/cities/{province_id}', 'CheckOngkirController@getCities');
});
