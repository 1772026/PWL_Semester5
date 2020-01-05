<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('role','daoRole@getAll');
//Route::get('/role/{id}','daoRole@get');
//Route::post('role','daoRole@add');
//Route::put('/role/{id}','daoRole@update');
//Route::delete('/role/{id}','daoRole@delete');

Route::get('role','dao\daoRole@getAll');
Route::get('/role/{id}','dao\daoRole@get');
Route::post('role','dao\daoRole@add');
Route::put('/role/{id}','dao\daoRole@update');
Route::delete('/role/{id}','dao\daoRole@delete');
