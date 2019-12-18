<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/user/login', 'AuthController@showLoginForm')->name('login');
Route::post('/user/tologin', 'AuthController@login');
Route::get('/user/regist', 'AuthController@showRegistForm');
Route::post('/user/toregist', 'AuthController@register');
Route::get('/user/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index');
<<<<<<< HEAD
    Route::get('/producer', 'ProducerController@index');
    Route::get('/premiered', 'PremieredController@index');
    Route::get('/source', 'SourceController@index');
=======
    Route::post('/anime/insert', 'AnimeController@insert');
>>>>>>> 5747c153082ca3e461b72a3e8108263e32d09e15
});
