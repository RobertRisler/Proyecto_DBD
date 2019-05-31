<?php

use Illuminate\Http\Request;

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

/*Rutas de usuario*/

Route::post('/usuario', 'UserController@create');
Route::put('/usuario/update/{id}', 'UserController@update');
Route::get('/usuario','UserController@index');

Route::get('/usuario/{id}','UserController@show');
Route::delete('/usuario/destroy/{id}','UserController@destroy');



