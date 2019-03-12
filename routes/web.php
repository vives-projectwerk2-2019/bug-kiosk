<?php

Route::get('/', 'IndexController@index');

Route::get('/profile', 'PagesController@profile');

Route::get('/stats', 'PagesController@stats');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Social login route
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//vue route for logger
Route::get('/logger', 'SinglePageController@index');
