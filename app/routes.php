<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/login', 'SessionController@create');
Route::get('/logoff', 'SessionController@destroy');
Route::resource('session', 'SessionController');

Route::resource('register', 'RegisterController');

Route::resource('profile', 'ProfileController', ['before' => 'auth', 'except' => ['create', 'store']]);

Route::resource('event', 'EventController', ['before' => 'auth', 'except' => ['index']]);

Route::group(['prefix' => 'admin'], function()
{

	Route::get('users', 'AdminUserController@index');

	Route::resource('events', 'AdminEventController');

});

Route::resource('admin', 'AdminController', ['as' => 'admin']);

/*
	Generic routes
*/
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');