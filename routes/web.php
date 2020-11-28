<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
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



Route::get('posts', function () {
    return view('layouts.posts');
});


Route::get('admin/login', 'App\Http\Controllers\loginController@index' );
Route::post('admin/login', 'App\Http\Controllers\loginController@checkLogin' );
Route::get('admin/logout','App\Http\Controllers\logoutController@checkLogout');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::get('index', 'App\Http\Controllers\display_admin@index');
});

