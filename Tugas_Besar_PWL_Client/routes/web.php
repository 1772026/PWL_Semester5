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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/film', 'ViewController\filmController@index');
Route::get('/admin', 'ViewController\adminController@index');
Route::get('/cashier', 'ViewController\cashierController@index');
Route::get('/forgetPassword', 'ViewController\forgetPasswordController@index');

Route::get('/', 'ViewController\indexController@index');
Route::post('/', 'ViewController\indexController@valid');

//Route::get('/', 'ViewController\indexController@index');
//Route::post('/', function () {
//    return view('index');
//});

Route::get('/movie', 'ViewController\movieController@index');
Route::get('/movieDetail', 'ViewController\movieDetailController@index');
Route::get('/seat', 'ViewController\seatController@index');
Route::get('/signUp', 'ViewController\signUpController@index');
Route::get('/theater', 'ViewController\theaterController@index');
