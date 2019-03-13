<?php

Route::get('/', 'IndexController@index');

Route::get('/profile', 'PagesController@profile');

Route::get('/stats', 'PagesController@stats');

Route::get('/logger', 'PagesController@logger');

Route::get('/my_dongles', 'PagesController@my_dongles');

Route::get('/dongles', 'PagesController@dongles');

Route::get('/stats', 'PagesController@stats');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Social login route
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
