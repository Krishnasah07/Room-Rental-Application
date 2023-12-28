<?php

Route::get('/', function (){
    return view('front.index');
});

Route::view('/login','login')->name('login.page');
Route::post('/submit','LoginController@login')->name('admin.login.submit');

Route::group(['prefix'=>'admin'],function(){
    Route::view('dashboard','backend.dashboard.admin.index')->name('admin.dashboard');
});

Route::group(['prefix'=>'renter'],function(){
    Route::view('dashboard','backend.dashboard.renter.index')->name('renter.dashboard');
});

Route::group(['prefix'=>'landlord'],function(){
    Route::view('dashboard','backend.dashboard.landlord.index')->name('landlord.dashboard');
});