<?php

Route::get('/', 'HomeController@index');

Route::resource('session', 'SessionController');
Route::get('/login', 'SessionController@index');
Route::get('/logoff', 'SessionController@destroy');

Route::resource('register', 'RegisterController');

/*
	Generic routes
*/
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');