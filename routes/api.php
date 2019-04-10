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
Route::middleware('auth:api')->get('/user', 'UserController@getUser');

Route::get('/session/{device_id}/{user_dongle_id?}', 'UserController@getUserByDeviceId');

Route::get('/get_dongles', 'DongleController@get_dongles');

Route::post('/activate_dongle/{user_dongle_id}', 'DongleController@activate');
