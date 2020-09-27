<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::get('/', 'Frontend\HomeController@index')->name('login');
Route::post('/postlogin', 'Frontend\HomeController@postLogin');
Route::get('/logout', 'Frontend\HomeController@logout');

Route::group(['middleware' => ['auth', 'checkRole:mahasiswa']], function () {
    Route::get('/user', 'Frontend\UserController@index');
    Route::post('/user/getQuestion', 'Frontend\UserController@getQuestion');
    Route::post('/user/answer/upload', 'Frontend\UserController@answerupload');
});

// Backend Route
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', 'Backend\DashboardController@index');
    Route::get('/admin', 'Backend\DashboardController@index');

    Route::get('/admin/user', 'Backend\DashboardController@user');
    Route::get('/admin/soal', 'Backend\DashboardController@soal');
    Route::get('/admin/hasil', 'Backend\DashboardController@hasil');
    Route::get('/admin/matkul', 'Backend\DashboardController@matkul');
    Route::get('/admin/class', 'Backend\DashboardController@class');

    Route::post('/admin/postuser', 'Backend\UserController@postuser');
    Route::get('/admin/deleteuser', 'Backend\UserController@deleteuser');
    Route::post('/admin/postuser', 'Backend\UserController@postuser');
    Route::get('/admin/deleteuser/{id}', 'Backend\UserController@deleteuser');
    Route::get('/admin/edituser/{id}', 'Backend\UserController@edituser');
    Route::post('/admin/updateuser', 'Backend\UserController@updateuser');
    
    Route::post('/admin/postmatkul','Backend\CourseController@postmatkul');
    Route::get('/admin/deletematkul/{id}','Backend\CourseController@deletematkul');
    Route::get('/admin/editmatkul/{id}', 'Backend\CourseController@editmatkul');
    Route::post('/admin/updatematkul', 'Backend\CourseController@updatematkul');
});
