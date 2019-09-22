<?php

Route::get('/', 'Frontend\PageController@index');
Route::get('post/{id}', 'Frontend\PageController@show');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

require 'admin.php';


