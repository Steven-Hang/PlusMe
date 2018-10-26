<?php
use App\Location;
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

//ROUTES FOR MESSAGING SYSTEM
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});


Route::post('/nearest-shops', function () {
   $center=request('center');

// Search the rows in the markers table
    $nearestShops=Location::selectRaw("SELECT id, ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) ) + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance")
        ->where('distance','<',25)->orderBy('distance');
   return response(request()->all());
});

//function Route to customise The Look of the Dashboard page google map API
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

//GUEST USER ROUTES
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');
//Authentication Routes
Route::get('/user/activate/{token}', 'Auth\RegisterController@activateUser');
Auth::routes();

//USER ROUTES
    //PROFILE ROUTES
    Route::get('/user/{id}', 'UserController@show')->name('user.show');
    //
    Route::post('profile', 'UserController@update_avatar');
    Route::post('/changePassword','UserController@changePassword')->name('changePassword');

//Booking routes
Route::post('/booking', 'BookingController@createBooking')->name('booking.process');
Route::post('/booking/checkout', 'BookingController@process')->name('booking.payment');
Route::get('/booking/checkout/complete', 'BookingController@completeBooking')->name('booking.complete');
Route::get('/booking/checkout/payment', 'PaymentsController@process')->name('payment.process');
Route::get('/booking/extend', 'BookingController@extendBooking')->name('booking.extend');
Route::get('/booking/checkout/payment/process', 'BookingController@finishBooking')->name('booking.end');
Route::get('/bookinghistory', 'BookingController@view')->name('bookinghistory');

//ADMIN ROUTES
Route::group(['middleware' => ['auth', 'admin']], function(){
Route::match(['get','post'],'/admin','AdminController@login')->name('adminLogin');
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::get('/admin/panel','AdminController@panel')->name('admin.panel');
Route::get('/logout','AdminController@logout')->name('adminLogout');
Route::get('admindashboard','PagesController@admindashboard')->name('admindashboard');
Route::get('abooking','BookingController@index')->name('abookings');
Route::get('avehicles','VehiclesController@index')->name('avehicles');
Route::get('avehicles/search','VehiclesController@search')->name('vehicles.search');
Route::get('ausers','UserController@index')->name('ausers');
Route::get('ausers/search', 'UserController@searchUser')->name('user.search');
Route::get('aparkinglot','LocationsController@index')->name('aparkinglot');
Route::get('anotifications','PagesController@notification')->name('anotifications');
Route::get('adminprofile','PagesController@adminprofile')->name('adminprofile');
Route::get('abooking/search', 'BookingController@searchBooking')->name('booking.search');
Route::get('location/add', 'LocationsController@add')->name('Location.add');
Route::get('location/update', 'LocationsController@update')->name('Location.update');
Route::get('location/search', 'LocationsController@searchLot')->name('Location.search');
Route::get('aparkinglot/save', 'LocationsController@store')->name('Location.store');
Route::resource('vehicles','VehiclesController');
Route::resource('users','UserController');
Route::resource('bookings','BookingController');
Route::resource('Locations','LocationsController');

});


//Resource routes


//errors route
Route::get('404',['as' => 'notfound', 'uses' => 'PagesController@pagenotfound']);
Route::get('403',['as' => 'forbidden', 'uses' => 'PagesController@forbidden']);



/* Private Message urls
Route::post('get-message-notifications', 'MessageController@getUserMessagesNotifications');
Route::post('get-messages', 'MessageController@getMessages');
Route::post('get-message', 'MessageController@getMessagesById');
Route::post('get-messages-sent', 'MessageController@getMessagesBySent');
Route::post('send-message', 'MessageController@sendMessage');
*/

//Locations
Route::get('location/add', 'LocationController@add')->name('Location-add');
Route::post('location/save', 'LocationController@add')->name('Location-post');
