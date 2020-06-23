<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::get('/', 'Frontend\HomeController@index');
Route::get('/postlogin', 'Frontend\HomeController@postLogin');

// Backend Route
Route::get('/admin', 'Backend\DashboardController@index');
Route::get('/admin/user', 'Backend\DashboardController@user');
Route::get('/admin/soal', 'Backend\DashboardController@soal');
Route::get('/admin/hasil', 'Backend\DashboardController@hasil');
Route::get('/admin/matkul', 'Backend\DashboardController@matkul');
Route::get('/admin/class', 'Backend\DashboardController@class');

Route::post('/admin/postuser', 'Backend\UserController@postuser');
Route::get('/admin/deleteuser/{id}', 'Backend\UserController@deleteuser');
Route::get('/admin/edituser/{id}', 'Backend\UserController@edituser');
Route::post('/admin/updateuser', 'Backend\UserController@updateuser');
