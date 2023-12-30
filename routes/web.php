<?php

Route::get('/', function (){
    return view('frontend.index');
});

// login and Register Route
Route::view('/login','login')->name('login.page');
Route::post('/submit','LoginController@login')->name('admin.login.submit');

// Contact US Route
Route::post('/contact-submit','ContactController@create')->name('contact.us.submit');

// group of admin routes
Route::group(['prefix'=>'admin'],function(){
    Route::view('dashboard','backend.dashboard.admin.index')->name('admin.dashboard');
});

// group of renter routes
Route::group(['prefix'=>'renter'],function(){
    Route::view('dashboard','backend.dashboard.renter.index')->name('renter.dashboard');
});

// group of landlord routes
Route::group(['prefix'=>'landlord'],function(){
    Route::view('dashboard','backend.dashboard.landlord.index')->name('landlord.dashboard');
    Route::get('create','ProductConteroller@index')->name('create.room.details');
    Route::post('create-room-details','ProductConteroller@create')->name('insert.room.details');
});