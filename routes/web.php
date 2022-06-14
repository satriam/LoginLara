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

Route::get('/register','AuthController@register');
Route::post('/simpanuser','AuthController@simpanuser');
Route::post('/ceklogin','AuthController@ceklogin');
Route::get('/','AuthController@login');
Route::get('/user','UserController@fake');
Route::get('/profile','UserController@profile');
// Route::get('/fake','UserController@fake');
