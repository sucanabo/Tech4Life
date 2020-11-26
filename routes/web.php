<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('admin/home/index');
    });
    Route::get('login', 'App\Http\Controllers\login_admin@index' );
    Route::post('login', 'App\Http\Controllers\login_admin@checkLogin' );
    Route::get('register','App\Http\Controllers\logout_admin@index');
    Route::get('logout','App\Http\Controllers\logout_admin@checkLogout');


    Route::group(['prefix'=>'categories'],function(){
        Route::get('/','App\Http\Controllers\category_controller@index');
    
        Route::get('create','App\Http\Controllers\category_controller@create');
    
        Route::post('store', 'App\Http\Controllers\category_controller@store');
    
        Route::DELETE('delete/{id}', 'App\Http\Controllers\category_controller@destroy');
    
        Route::get('edit/{id}', 'App\Http\Controllers\category_controller@edit');
    
        Route::POST('edit/update/{id}', 'App\Http\Controllers\category_controller@update');
    });
});




Route::group(['prefix'=>'images'],function(){
    Route::get('/','App\Http\Controllers\image_controller@index');

    Route::get('create','App\Http\Controllers\image_controller@create');

    Route::post('store', 'App\Http\Controllers\image_controller@store');

    Route::DELETE('delete/{id}', 'App\Http\Controllers\image_controller@destroy');

    Route::get('edit/{id}', 'App\Http\Controllers\image_controller@edit');

    Route::POST('edit/update/{id}', 'App\Http\Controllers\image_controller@update');
});


Route::get('posts', 'App\Http\Controllers\post_controller@index');

