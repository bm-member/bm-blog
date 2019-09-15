<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function() {
    return view('backend.layouts.master');
});

// Route::view('/admin', 'backend.layouts.master');

Route::get('admin/category', 'Backend\CategoryController@index');
Route::get('admin/category/create', 'Backend\CategoryController@create');
Route::get('admin/category/{id}/edit', 'Backend\CategoryController@edit');
Route::post('admin/category', 'Backend\CategoryController@store');
