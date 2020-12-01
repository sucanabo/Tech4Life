<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
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

    // Chức năng login và logout
    Route::get('admin/login', 'App\Http\Controllers\login_controller@index' );

    Route::post('admin/login', 'App\Http\Controllers\login_controller@checkLogin' );

    Route::get('admin/logout','App\Http\Controllers\logout_controller@checkLogout');
  
    Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){

        Route::get('index', 'App\Http\Controllers\display_controller@index');
            //Post
        Route::resource('posts', PostController::class);
        // Bảng category thêm , xóa ,sửa
    Route::group(['prefix'=>'categories','middleware'=>'adminLogin'],function(){

        Route::get('/','App\Http\Controllers\category_controller@index');
    
        Route::get('create','App\Http\Controllers\category_controller@create');
    
        Route::post('store', 'App\Http\Controllers\category_controller@store');
    
        Route::DELETE('delete/{id}', 'App\Http\Controllers\category_controller@destroy');
    
        Route::get('edit/{id}', 'App\Http\Controllers\category_controller@edit');
    
        Route::POST('edit/update/{id}', 'App\Http\Controllers\category_controller@update');
    });

    // Bảng images thêm , xóa ,sửa
    Route::group(['prefix'=>'images','middleware'=>'adminLogin'],function(){

        Route::get('/','App\Http\Controllers\image_controller@index');
    
        Route::get('create','App\Http\Controllers\image_controller@create');
    
        Route::post('store', 'App\Http\Controllers\image_controller@store');
    
        Route::DELETE('delete/{id}', 'App\Http\Controllers\image_controller@destroy');
    
        Route::get('edit/{id}', 'App\Http\Controllers\image_controller@edit');
    
        Route::POST('edit/update/{id}', 'App\Http\Controllers\image_controller@update');
    });

    // Bảng users thêm , xóa ,sửa
    Route::group(['prefix'=>'users'],function(){

        route::get('index','App\Http\Controllers\user_controller@index');

        route::get('detail/{id}','App\Http\Controllers\user_controller@show');

        route::get('edit/{id}','App\Http\Controllers\user_controller@edit');

        route::post('edit/{id}','App\Http\Controllers\user_controller@postEdit');
    });

    });
    

