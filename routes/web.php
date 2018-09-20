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
use App\Location;

Route::post('/nearest-shops', function () {
   $center=request('center');

    // Search the rows in the markers table
    $nearestShops=Location::selectRaw("SELECT id, ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) ) + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance")
        ->where('distance','<',25)->orderBy('distance');
   return response(request()->all());
});




Route::get('/map', 'MapController@index');

//function Route to customise The Look of the Dashboard page google map API
Route::get('/home', 'HomeController@index');

//return Index (welcome) page
Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes
Route::get('/user/activate/{token}', 'Auth\RegisterController@activateUser');
Auth::routes();

Route::get('calc', 'BookingController@showPriceBasedOnHours');


//Page Routes
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/policy', 'PagesController@policy')->name('policy');
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');

//User routes
Route::get('/profile', 'PagesController@profile')->name('profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('/bookinghistory', 'PagesController@bookinghistory')->name('bookinghistory');
Route::get('/messagebox', 'PagesController@messagebox')->name('messagebox');

//Booking routes
Route::get('/booking', 'PagesController@booking')->name('booking');
Route::get('/booking/step2', 'PagesController@step2')->name('booking/step2');
Route::get('/booking/step3', 'PagesController@step3')->name('booking/step3');
Route::get('/booking/step3/checkout', 'PagesController@checkout')->name('checkout');
Route::get('/booking/step3/checkout/payment/process', 'PaymentsController@process')->name('payment.process');

//Admin Route
Route::match(['get','post'],'/admin','AdminController@login')->name('adminLogin');

//Protected Admin routes(soon)
Route::get('/admin/panel','AdminController@panel')->name('admin.panel');
Route::get('/logout','AdminController@logout')->name('adminLogout');

//Resource routes
Route::resource('vehicles','VehiclesController');

//errors route
Route::get('404',['as' => 'notfound', 'uses' => 'PagesController@pagenotfound']);
Route::get('403',['as' => 'forbidden', 'uses' => 'PagesController@forbidden']);


//test use only will delete later
Route::get('admindashboard','PagesController@admindashboard')->name('admindashboard');
Route::get('avehicles','PagesController@vehicles')->name('avehicles');
Route::get('ausers','PagesController@users')->name('ausers');
Route::get('aparkinglot','PagesController@parkinglot')->name('aparkinglot');
Route::get('anotifications','PagesController@notification')->name('anotifications');
Route::get('adminprofile','PagesController@adminprofile')->name('adminprofile');


/* Private Message urls */
Route::post('get-message-notifications', 'MessageController@getUserMessagesNotifications');
Route::post('get-messages', 'MessageController@getMessages');
Route::post('get-message', 'MessageController@getMessagesById');
Route::post('get-messages-sent', 'MessageController@getMessagesBySent');
Route::post('send-message', 'MessageController@sendMessage');

//Locations
Route::get('location/add', 'LocationController@add')->name('Location-add');
Route::post('location/save', 'LocationController@add')->name('Location-post');

//Change password route
Route::post('/changePassword','UserController@changePassword')->name('changePassword');