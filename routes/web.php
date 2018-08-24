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
Route::get('/map', 'MapController@index');

//function Route to customise The Look of the Dashboard page google map API
Route::get('/home', function () {

    $config['center'] = 'RMIT, Australia';
    $config['zoom'] = '18';
    $config['map_height'] = '1000px';
    //$config['map_width'] = '500px';
    $config['scrollwheel'] = false;

    // initialize maps using these configs above
    GMaps::initialize($config);


    // Add Marker
    $marker['position']= 'RMIT,Australia';
    $marker['infowindow_content']= 'RMIT University Melbourne,Australia';
    // Using icons from google site at https://sites.google.com/site/gmapsdevelopment/
    $marker['icon'] ='http://maps.google.com/mapfiles/kml/paddle/blu-circle.png';
    Gmaps::add_marker($marker);

    // creating map using $map variable so its accessible anywhere
    $map = GMaps::create_map();

    return view('home')->with('map',$map);
});

//return Index (welcome) page
Route::get('/', function () {
    return view('welcome');
});

//Authentication Routes
Route::get('/user/activate/{token}', 'Auth\RegisterController@activateUser');
Auth::routes();

//Page Routes
Route::get('/user/{id}', 'UserController@show')->name('user.show');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/policy', 'PagesController@policy')->name('policy');
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/profile', 'PagesController@profile')->name('profile');
Route::get('/bookinghistory', 'PagesController@bookinghistory')->name('bookinghistory');
Route::get('/messagebox', 'PagesController@messagebox')->name('messagebox');
Route::get('/booking', 'PagesController@booking')->name('booking');
Route::get('/booking/step2', 'PagesController@step2')->name('booking/step2');
Route::get('/booking/step3', 'PagesController@step3')->name('booking/step3');
Route::get('/booking/step3/checkout', 'PagesController@checkout')->name('checkout');
Route::get('/booking/step3/checkout/payment/process', 'PaymentsController@process')->name('payment.process');

//
Route::resource('vehicles','VehiclesController');
//
Route::post('profile', 'UserController@update_avatar');
