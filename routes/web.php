<?php

Route::get('/', 'PagesController@index');

Route::get('/home', 'PagesController@home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
