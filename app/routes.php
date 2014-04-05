<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/login', 'SessionController@create');
Route::get('/logoff', 'SessionController@destroy');
Route::resource('session', 'SessionController');

Route::resource('register', 'RegisterController');

Route::resource('profile', 'ProfileController', ['only'=>['show', 'store', 'edit', 'update', 'destroy']])->before('auth');

Route::resource('event')

/*
	Generic routes
*/
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');