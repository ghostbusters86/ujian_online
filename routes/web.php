<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::get('/', 'Frontend\HomeController@index')->name('login');
Route::post('/postlogin', 'Frontend\HomeController@postLogin');
Route::get('/logout', 'Frontend\HomeController@logout');

Route::group(['middleware' => ['auth', 'checkRole:mahasiswa']], function () {
    Route::get('/user', 'Frontend\UserController@index');
});

// Backend Route
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', 'Backend\DashboardController@index');
});