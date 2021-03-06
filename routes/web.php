<?php

Route::get('/', 'IndexController@index');
Route::get('/profile', 'PagesController@profile');
Route::get('/stats', 'PagesController@stats');
Route::get('/my_dongles', 'PagesController@my_dongles');
Route::get('/dongles', 'PagesController@dongles');
Route::get('/stats', 'PagesController@stats');

Route::get('/edit_profile', 'PagesController@editProfile');
Route::post('/edit_profile', 'PagesController@updateAvatar');

Route::get('/register_device', 'PagesController@registerDevice');
Route::get('/program_dongle', 'PagesController@programDongle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Social login route
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//vue route for logger
Route::get('/logger', 'SinglePageController@index');

Route::get('/permission_denied', 'PagesController@permissionDenied');

Route::get('/become_admin', 'PagesController@becomeAdmin');
Route::post('/become_admin', 'PagesController@checkKey');

Route::get('/admin/index', 'AdminController@adminIndex');
Route::get('/admin/userInfo', 'AdminController@userInfo');
Route::get('/admin/dongleInfo', 'AdminController@dongleInfo');
Route::get('/admin/admins', 'AdminController@getAdmins');

Route::get('/admin/userInfo/edit/{id}', 'AdminController@editUser');
Route::get('/admin/dongleInfo/edit/{id}', 'AdminController@editDongle');

Route::get('/admin/admins/{id}', 'AdminController@removeAdminRights');

Route::get('/admin/userInfo/{id}', 'AdminController@deleteUser');
Route::get('/admin/dongleInfo/delete/{id}', 'AdminController@deleteDongle');

Route::get('/admin/userInfo/reset/avatar/{id}', 'AdminController@resetAvatar');
Route::post('/admin/userInfo/edit/{id}', 'AdminController@editUserProfile');

Route::get('/admin/userInfo/reset/user_dongle_id/{id}', 'AdminController@resetUserDongleId');
Route::get('/admin/dongleInfo/new', 'AdminController@newDongle');
