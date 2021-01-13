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

Route::get("user", "App\Http\Controllers\Api\user_controller@index");

Route::post("register", "App\Http\Controllers\Api\RegisterController@store");
//login_token
Route::post("login", "App\Http\Controllers\Api\login_Controller@login");
//show_token
Route::get("series", "App\Http\Controllers\Api\series_Controller@getAPI");
//refresh_token
Route::post("refresh_token", "App\Http\Controllers\Api\series_Controller@refreshToken");
//post
Route::get("post", "App\Http\Controllers\Api\post_controller@index");
//notifications
Route::get("notifications", "App\Http\Controllers\Api\user_controller@notifications");