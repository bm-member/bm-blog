<?php

Route::view('/admin', 'backend.layouts.master')->middleware('myware');

Route::group(['prefix'=> 'admin', 'namespace' => 'Backend', 'middleware' => 'myware' ], function() {

    // Category Routes
    Route::get('category', 'CategoryController@index');
    Route::get('category/create', 'CategoryController@create');
    Route::get('category/{id}/edit', 'CategoryController@edit');
    Route::post('category/{id}/edit', 'CategoryController@update');
    Route::get('category/{id}/delete', 'CategoryController@destroy');
    Route::post('category', 'CategoryController@store');

    // Post Routes
    Route::get('/post', 'PostController@index');
    Route::get('/post/create', 'PostController@create');
    Route::post('/post', 'PostController@store');
    Route::get('/post/{id}/edit', 'PostController@edit');
    Route::post('/post/{id}/edit', 'PostController@update');
    Route::get('/post/{id}/delete', 'PostController@destroy');

});
