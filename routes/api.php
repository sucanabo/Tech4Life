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

Route::post("register", "App\Http\Controllers\Api\RegisterController@register");
//login_token
Route::post("login", "App\Http\Controllers\Api\login_Controller@login");
//show_token
Route::get("series", "App\Http\Controllers\Api\series_Controller@getAPI");
//refresh_token
Route::post("refresh_token", "App\Http\Controllers\Api\series_Controller@refreshToken");
//post
Route::get("post", "App\Http\Controllers\Api\post_controller@index");
//searchpost
Route::get("searchpost/{search}","App\Http\Controllers\Api\post_controller@searchpost");
//notifications
Route::get("notifications", "App\Http\Controllers\Api\user_controller@notifications");
//report
Route::get("getpostreport", "App\Http\Controllers\Api\\report@getPostReport");
Route::post("postpostreport", "App\Http\Controllers\Api\\report@postPostReport");
//announcement
Route::get("announcement","App\Http\Controllers\Api\announcement_controller@index");
//=============
Route::post("logout", "App\Http\Controllers\Api\delete_token@deleteToken");

Route::post("login1", "App\Http\Controllers\Api\login_Controller@login1");

Route::get("check", "App\Http\Controllers\Api\logout_Controller@check");

Route::delete("delete_token", "App\Http\Controllers\Api\delete_token@deleteToken");

Route::post("follow_user", "App\Http\Controllers\Api\user_follow_controller@follow_user");

Route::post("post_report", "App\Http\Controllers\Api\post_report_controller@post_report");

Route::post("post_clip", "App\Http\Controllers\Api\post_clip_controller@post_clip");

Route::post("up_vote", "App\Http\Controllers\Api\user_vote_cotroller@up_vote");

//post clip_post
Route::post("clipPost", "App\Http\Controllers\Api\postClip_controller@clipPost");
//get clip_post
Route::get("getClipPost", "App\Http\Controllers\Api\postClip_controller@getClipPost");
//update view
Route::post("updateView/{id}", "App\Http\Controllers\Api\post_controller@update");