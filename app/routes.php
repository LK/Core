<?php

Route::get('/', 'HomeController@index');

Route::get('/login', 'SessionController@create');
Route::get('/logoff', 'SessionController@destroy');
Route::resource('session', 'SessionController');

Route::resource('register', 'RegisterController');

/*
	Generic routes
*/
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');