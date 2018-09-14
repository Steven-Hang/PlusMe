<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Private Message urls */
Route::post('get-message-notifications', 'MessageController@getUserMessagesNotifications');
Route::post('get-messages', 'MessageController@getMessages');
Route::post('get-message', 'MessageController@getMessagesById');
Route::post('get-messages-sent', 'MessageController@getMessagesBySent');
Route::post('send-message', 'MessageController@sendMessage');
