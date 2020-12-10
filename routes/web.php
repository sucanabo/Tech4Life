<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\category_controller;
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
  
    Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'],function(){
        Route::get('index', 'App\Http\Controllers\display_controller@index');
        //Post
        Route::resource('posts', PostController::class);
        // Bảng category thêm , xóa ,sửa
        Route::resource('categories', category_controller::class);

        Route::resource('users', user_Controller::class);
        //Xoa bang
        // Bảng images thêm , xóa ,sửa
        Route::group(['prefix'=>'images'],function(){

            Route::get('/','App\Http\Controllers\image_controller@index');
        
            Route::get('create','App\Http\Controllers\image_controller@create');
        
            Route::post('store', 'App\Http\Controllers\image_controller@store');
        
            Route::DELETE('delete/{id}', 'App\Http\Controllers\image_controller@destroy');
        
            Route::get('edit/{id}', 'App\Http\Controllers\image_controller@edit');
        
            Route::POST('edit/update/{id}', 'App\Http\Controllers\image_controller@update');
        });

        // Bảng users thêm , xóa ,sửa
        Route::group(['prefix'=>'users'],function(){
            route::get('','App\Http\Controllers\user_controller@index');

            route::get('create','App\Http\Controllers\user_controller@create');

            route::post('create','App\Http\Controllers\user_controller@postAddUser');

            route::get('detail/{id}','App\Http\Controllers\user_controller@show');

            route::get('edit/{id}','App\Http\Controllers\user_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\user_controller@update');

            route::get('delete/{id}','App\Http\Controllers\user_controller@destroy');
        });

        Route::group(['prefix'=>'series'],function(){
            route::get('','App\Http\Controllers\series_controller@index');

            route::get('create','App\Http\Controllers\series_controller@create');

            route::post('create','App\Http\Controllers\series_controller@store');

            route::get('show/{id}','App\Http\Controllers\series_controller@show');

            route::get('edit/{id}','App\Http\Controllers\series_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\series_controller@update');

            route::get('delete/{id}','App\Http\Controllers\series_controller@destroy');
        });

        Route::group(['prefix'=>'announcements'],function(){
            route::get('','App\Http\Controllers\announcements_controller@index');

            route::get('create','App\Http\Controllers\announcements_controller@create');

            route::post('create','App\Http\Controllers\announcements_controller@store');

            route::get('edit/{id}','App\Http\Controllers\announcements_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\announcements_controller@update');

            route::get('delete/{id}','App\Http\Controllers\announcements_controller@destroy');
        });

        Route::group(['prefix'=>'notifications'],function(){
            route::get('','App\Http\Controllers\notification_controller@index');

            route::get('create','App\Http\Controllers\notification_controller@create');

            route::post('create','App\Http\Controllers\notification_controller@store');

            route::get('show/{id}','App\Http\Controllers\notification_controller@show');

            route::get('edit/{id}','App\Http\Controllers\notification_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\notification_controller@update');

            route::get('delete/{id}','App\Http\Controllers\notification_controller@destroy');
        });


        Route::group(['prefix'=>'conversations'],function(){
            route::get('','App\Http\Controllers\conversation_controller@index');

            route::get('create','App\Http\Controllers\conversation_controller@create');

            route::post('create','App\Http\Controllers\conversation_controller@store');

            route::get('show/{id}','App\Http\Controllers\conversation_controller@show');

            route::get('edit/{id}','App\Http\Controllers\conversation_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\conversation_controller@update');

            route::get('delete/{id}','App\Http\Controllers\conversation_controllerr@destroy');
        });

        
    });