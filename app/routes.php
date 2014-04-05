<?php

Route::get('/', 'HomeController@index');

Route::resource('session', 'SessionController');

// Pretty login/logout routes
Route::get('/login', 'SessionController@index');
Route::get('/logoff', 'SessionController@destroy');

Route::resource('register', 'RegisterController');