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

Route::post('auth/login', 'Api\AuthController@authenticate');
Route::post('auth/refresh', 'Api\AuthController@refresh');
Route::get('auth/logout', 'Api\AuthController@logout');

//pega somente os controladores que estão dentro de Api
Route::group(['middleware'=>'jwt.auth', 'namespace'=>'Api\\'], function(){
    Route::get('auth/me', 'AuthController@getAuthenticatedUser');
});