<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('home', 'HomeController@index');

Route::get('/','HomeController@index');
Route::resource('/email','EmailController');
Route::get('/gallery','HomeController@gallery');
Route::get('admin/files','GalleryController@listing');
Route::get('admin/gallery/video','GalleryController@video');
Route::get('admin/login/logout','LogController@logout');
Route::resource('admin/teacher','TeacherController');
Route::resource('admin/login','LogController');
Route::resource('admin/gallery','GalleryController');
Route::resource('admin/video','VideoController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
