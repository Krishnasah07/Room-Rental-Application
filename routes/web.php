<?php
use App\Category;
use App\Systemsetting;
use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Session;



// Frontend All Routes i.e Main page all routes
Route::get('/', function () {
    $data['systems'] = Systemsetting::find(1);
    $data['categories'] = Category::with('products')->latest()->paginate(6)->first(); // Change 10 to the number of items you want per page
    Session::put('setting', $data['systems']);
    return view('frontend.index', $data);

})->name('Main.Page');

Route::get('/','FrontendController@index')->name('ok');

// View Room details Route
Route::get('Room/Details/{id}','FrontendController@roomdetails')->name('details');


// login and Register Route
Route::view('/login','login')->name('login.page');
Route::get('/register','RegisterController@index')->name('register.page');
Route::post('/register','RegisterController@register')->name('register.submit');
Route::post('/submit','LoginController@login')->name('admin.login.submit');
Route::post('/homelogin','LoginController@checklogin')->name('login.submit');

// Logout Route
Route::get('/logout', 'LoginController@logout')->name('logout.all');


//search
Route::get('search','CategoryConteroller@search')->name('frontend.search');

// Contact US Route
Route::post('/contact/submit','ContactController@submit')->name('cts');

// group of admin routes
Route::group(['prefix'=>'admin','middleware' => 'auth.login'],function(){
    Route::get('dashboard','LoginController@dashboard')->name('admin.dashboard');

    //LAndlord Details on Admin Dashboard
    Route::get('Landlord/Dertails','Admincontroller@landlord')->name('Landlord.Details');

    //LAndlord Details on Admin Dashboard
    Route::get('Renter/Dertails','Admincontroller@Renter')->name('Renter.Details');
  
     // System settings
    Route::resource('system-setting','Systemcontroller');

    //New Admin all routes 
    Route::resource('new/admin/settings','NewAdminController'); 
    Route::get('add/new/admin','NewAdminController@add_admin')->name('New.Admin');
    Route::get('delete/admin/{id}','NewAdminController@delete')->name('Admin.delete');

    //Change Admin Password
    Route::get('change/password','Admincontroller@Change_password')->name('Change.Password.Admin');
    Route::post('change/password/submit','Admincontroller@Change_Admin_password')->name('Change.Password.Admin.Submit');

    //Change Admin Password
    Route::get('upadate/profile','Admincontroller@index')->name('Update.Profile.Admin');
    Route::post('upadate/profile/submit','Admincontroller@update_profile')->name('Update.Password.Admin.Submit');
});


// group of landlord routes
Route::group(['prefix'=>'landlord','middleware' => 'auth.login'],function(){
    Route::get('dashboard','Reservecontroller@reserve_details')->name('landlord.dashboard');

    //View More Details about Reservation Route from landlord Dashboard
    Route::get('/Room/Reserve/Details/{id}','Reservecontroller@reserve_details_update')->name('View.More.Room.Details');

    //Reject the request of reservation
    Route::get('/Room/Reservation/Reject/{id}','Reservecontroller@reserve_reject')->name('Room.Reservation.Reject');

    //Reject the request of reservation
    Route::get('/Room/Reservation/Approval/{id}','Reservecontroller@reserve_approve')->name('Room.Reservation.Approval');

    // Renter Settings Routes
    Route::get('settings','LandlordSettingsController@index')->name('Landlord.Settings'); // View Renter Settings
    Route::post('profile/update','LandlordSettingsController@update_profile')->name('Landlord.Profile.Updation');

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
    Route::get('dashboard','Reservecontroller@index')->name('renter.dashboard'); // View Reservation Details
    Route::get('Room/Reservation/Delete/{id}','Reservecontroller@reservation_delete')->name('Room.Reservation.Delete');  //Delete Reservation Details
    Route::get('trash','Reservecontroller@trash')->name('Room.Reservation.Trash'); //Room Reservation's Trash Details 
    Route::get('Room/Reservation/Restore/{id}','Reservecontroller@trash_restore')->name('Room.Reservation.Restore');  //Restore Reservation Details from trash
    Route::get('Room/Reservation/Permanent/Delete/{id}','Reservecontroller@trash_delete')->name('Room.Reservation.Force.Delete');  //Restore Reservation Details from trash

    // Renter Settings Routes
    Route::get('settings','RenterSettingsController@index')->name('Renter.Settings'); // View Renter Settings
    Route::post('profile/update','RenterSettingsController@update_profile')->name('Profile.Updation');
     
});

Route::get('set',function(){
    $session = session()->get('id');
    print_r($session);
    die;
});

Route::get('/count', function (){
    dd($products);

});

   

    




   

