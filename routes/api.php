<?php

Route::group(['prefix' => 'user'], function () {
    Route::get('all', 'UserController@index');
    Route::get('{id}', 'UserController@show')->where(['id' => '[0-9]+']);
    Route::post('create', 'UserController@store');
    Route::put('update/{id}', 'UserController@update');
    Route::delete('delete/{id}', 'UserController@destroy');
});

Route::group(['prefix' => 'project'], function () {
    Route::get('all', 'ProjectController@index');
    Route::get('{id}', 'ProjectController@show')->where(['id' => '[0-9]+']);
    Route::post('create', 'ProjectController@store');
    Route::get('user/{id}', 'ProjectController@user');
    Route::put('update/{id}', 'ProjectController@update');
    Route::delete('delete/{id}', 'ProjectController@destroy');
});

Route::group(['prefix' => 'note'], function () {
    Route::get('all', 'NoteController@index');
    Route::get('{id}', 'NoteController@show')->where(['id' => '[0-9]+']);
    Route::post('create', 'NoteController@store');
    Route::put('update/{id}', 'NoteController@update');
    Route::delete('delete/{id}', 'NoteController@destory');
});
