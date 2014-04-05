<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/login', 'SessionController@create');
Route::get('/logoff', 'SessionController@destroy');
Route::resource('session', 'SessionController');

Route::resource('register', 'RegisterController');

Route::resource('profile', 'ProfileController', ['before' => 'auth']);

Route::resource('event', 'EventController', ['before' => 'auth', 'except' => ['index']]);

/*
	Generic routes
*/
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');