<?php

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('register','UsersController@create')->name('register');

Route::get('/users','UsersController@index')->name('users.index');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users','UsersController@store')->name('users.store');
Route::get('users/{user}','UsersController@show')->name('users.show');
Route::get('users/{user}/edit')->name('users.edit');
Route::put('users/{user}','UsersController@update')->name('users.update');
Route::delete('users/{user}','UsersController@destroy')->name('users.destroy');

//Route::resource('users','UsersController');

Route::get('/login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destroy')->name('logout');
