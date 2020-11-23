<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/posts', function () {
    return view('layouts.posts');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('login', 'App\Http\Controllers\login_admin@index' );
    Route::post('login', 'App\Http\Controllers\login_admin@checkLogin' );
    Route::get('register','App\Http\Controllers\logout_admin@index');
    Route::get('logout','App\Http\Controllers\logout_admin@checkLogout');
});
