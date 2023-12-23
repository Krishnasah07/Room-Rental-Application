<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin' ], function () {
    Route::view('dashboard','backend.dashboard.admin.index');
});

Route::group(['prefix' => 'renter' ], function () {
    Route::view('dashboard','backend.dashboard.renter.index');
});

Route::group(['prefix' => 'landlord' ], function () {
    Route::view('dashboard','backend.dashboard.landlord.index');
});
