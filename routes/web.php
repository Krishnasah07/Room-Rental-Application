<?php
use App\Category;

Route::get('/', function (){
    $data['system'] = Systemsetting::find(1);
    $data['categories'] = Category::with('products')->get();
    $_SESSION['setting'] = $data['system'];
    return view('frontend.index');
});

// login and Register Route
Route::view('/login','login')->name('login.page');
Route::post('/submit','LoginController@login')->name('admin.login.submit');

// Contact US Route
Route::post('/contact-submit','ContactController@create')->name('contact.us.submit');

// group of admin routes
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard','LoginController@dashboard')->name('admin.dashboard');

    // System Setting Route
    Route::resource('system-setting','Systemcontroller');
});

// group of renter routes
Route::group(['prefix'=>'renter'],function(){
    Route::view('dashboard','backend.dashboard.renter.index')->name('renter.dashboard');
});

// group of landlord routes
Route::group(['prefix'=>'landlord'],function(){
    Route::view('dashboard','backend.dashboard.landlord.index')->name('landlord.dashboard');
    Route::view('Room/Details/View','backend.dashboard.landlord.roomdetails')->name('room.details.view');
    Route::get('create','ProductConteroller@index')->name('create.room.details');
    Route::post('create-room-details','ProductConteroller@create')->name('insert.room.details');
});