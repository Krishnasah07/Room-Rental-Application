<?php
use App\Category;
use App\Systemsetting;



// Frontend All Routes i.e Main page all routes
Route::get('/', function (){
    $data['systems'] = Systemsetting::find(1);
    $data['categories'] = Category::with('products')->get();
    $_SESSION['setting'] = $data['systems'];
    return view('frontend.index',$data);
    });

// View Room details Route

Route::get('Room/Details/{id}','FrontendController@roomdetails')->name('details');


// login and Register Route
Route::view('/login','login')->name('login.page');
Route::get('/register','RegisterController@index')->name('register.page');
Route::post('/register','RegisterController@register')->name('register.submit');
Route::post('/submit','LoginController@login')->name('admin.login.submit');

// Logout Route
Route::get('/logout', 'LoginController@logout')->name('logout.all');


//search
Route::get('search','CategoryConteroller@search')->name('frontend.search');

// Contact US Route
Route::post('/contact-submit','ContactController@create')->name('Contact.Us.Submit');

// group of admin routes
Route::group(['prefix'=>'admin','middleware' => 'auth.login'],function(){
    Route::get('dashboard','LoginController@dashboard')->name('admin.dashboard');

    // Admin settings
    Route::resource('settings','Adminsettings');
    Route::get('/new/admin','FrontendController@newadmin')->name('new.admin');


    // Route::get('Room/Category/Delete/{id}','CategoryConteroller@catdelete')->name('Room.Category.Delete');  //

    // System Setting Route
    Route::resource('system-setting','Systemcontroller');
});


// group of landlord routes
Route::group(['prefix'=>'landlord','middleware' => 'auth.login'],function(){
    Route::view('dashboard','backend.dashboard.landlord.index')->name('landlord.dashboard');

    // Room Details All Routes
    Route::get('Room/Details','ProductConteroller@index')->name('Room.Details');  //view category
    Route::get('Room/Details/Add','ProductConteroller@addroomview')->name('Room.Details.View');  //Add Room Category
    Route::post('Room/Detail/Add','ProductConteroller@create')->name('Add.Room.Details');  //Insert Room Data 
    Route::get('Room/Details/Delete/{id}','ProductConteroller@roomdelete')->name('Room.Details.Delete');  //Delete Room details
    

    // Room Category All Routes
    Route::get('Room/Category','CategoryConteroller@index')->name('Room.Category');  //view category
    Route::get('Room/Category/Add','CategoryConteroller@addcat')->name('Room.Category.View');  //Add Room Category
    Route::post('Room/Category/add/Details','CategoryConteroller@catinsert')->name('Add.Room.Category');  //Insert Category Data
    Route::get('Room/Category/Delete/{id}','CategoryConteroller@catdelete')->name('Room.Category.Delete');  //Delete category
    Route::get('Rooms/Category/Edit/{id}','CategoryConteroller@catedit')->name('Room.Category.Edit');  //Edit category   
    Route::post('Room/Category/Update/{id}','CategoryConteroller@catupdate')->name('Update.Room.Category');  //Insert Category Data

    // Mail to Room reserver i.e Renter
    Route::post('Room/Reserve/{id}','Reservecontroller@reserve')->name('Room.Reserve.Order');  //
});


// group of renter routes
Route::group(['prefix'=>'renter','middleware' => 'auth.login'],function(){
    Route::view('dashboard','backend.dashboard.renter.index')->name('renter.dashboard');
    // backend.renter.common.index
});