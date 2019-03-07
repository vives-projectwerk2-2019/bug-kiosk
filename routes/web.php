<?php

Route::get('/', 'PagesController@index');

Route::get('/profile', 'PagesController@profile');

Route::get('/stats', 'PagesController@stats');

Route::get('/logger', 'PagesController@logger');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Social login route
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
