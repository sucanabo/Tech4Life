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
    //user
    route::get('','App\Http\Controllers\Home\home_controller@index');



    // Chức năng login và logout
    Route::get('admin/login', 'App\Http\Controllers\login_controller@index' );

    Route::post('admin/login', 'App\Http\Controllers\login_controller@checkLogin' );

    Route::get('admin/logout','App\Http\Controllers\logout_controller@checkLogout');
  
    Route::group(['prefix'=>'admin', 'middleware'=>'checkLogin'],function(){
        Route::get('index', 'App\Http\Controllers\display_controller@index');
        //Post
        // Bảng category thêm , xóa ,sửa
        Route::resource('categories', category_controller::class);

        Route::resource('users', user_Controller::class);
        //Bảng posts
        Route::group(['prefix'=>'posts', 'middleware'=>'checkLogin'],function(){

            Route::get('/','App\Http\Controllers\post_controller@index');
        
            Route::get('create','App\Http\Controllers\post_controller@create');
        
            Route::post('store', 'App\Http\Controllers\post_controller@store');

            route::get('show/{id}','App\Http\Controllers\post_controller@show');
        
            Route::DELETE('delete/{id}', 'App\Http\Controllers\post_controller@destroy');
        
            Route::get('edit/{id}', 'App\Http\Controllers\post_controller@edit');
        
            Route::POST('edit/{id}', 'App\Http\Controllers\post_controller@update');
        });
        // Bảng images thêm , xóa ,sửa

        Route::group(['prefix'=>'images', 'middleware'=>'checkLogin'],function(){

            Route::get('/','App\Http\Controllers\image_controller@index');
        
            Route::get('create','App\Http\Controllers\image_controller@create');
        
            Route::post('store', 'App\Http\Controllers\image_controller@store');
        
            Route::DELETE('delete/{id}', 'App\Http\Controllers\image_controller@destroy');
        
            Route::get('edit/{id}', 'App\Http\Controllers\image_controller@edit');
        
            Route::POST('edit/update/{id}', 'App\Http\Controllers\image_controller@update');
        });

        // Bảng users thêm , xóa ,sửa
        Route::group(['prefix'=>'users', 'middleware'=>'checkLogin'],function(){
            route::get('','App\Http\Controllers\user_controller@index');

            route::get('create','App\Http\Controllers\user_controller@create');

            route::post('create','App\Http\Controllers\user_controller@postAddUser');

            route::get('detail/{id}','App\Http\Controllers\user_controller@show');

            route::get('edit/{id}','App\Http\Controllers\user_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\user_controller@update');

            route::get('delete/{id}','App\Http\Controllers\user_controller@destroy');
        });

        Route::group(['prefix'=>'series', 'middleware'=>'checkLogin'],function(){
            route::get('','App\Http\Controllers\series_controller@index');

            route::get('create','App\Http\Controllers\series_controller@create');

            route::post('create','App\Http\Controllers\series_controller@store');

            route::get('show/{id}','App\Http\Controllers\series_controller@show');

            route::get('edit/{id}','App\Http\Controllers\series_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\series_controller@update');

            route::get('delete/{id}','App\Http\Controllers\series_controller@destroy');
        });

        Route::group(['prefix'=>'announcements', 'middleware'=>'checkLogin'],function(){
            route::get('','App\Http\Controllers\announcements_controller@index');

            route::get('create','App\Http\Controllers\announcements_controller@create');

            route::post('create','App\Http\Controllers\announcements_controller@store');

            route::get('edit/{id}','App\Http\Controllers\announcements_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\announcements_controller@update');

            route::get('delete/{id}','App\Http\Controllers\announcements_controller@destroy');
        });

        Route::group(['prefix'=>'notifications', 'middleware'=>'checkLogin'],function(){
            route::get('','App\Http\Controllers\notification_controller@index');

            route::get('create','App\Http\Controllers\notification_controller@create');

            route::post('create','App\Http\Controllers\notification_controller@store');

            route::get('show/{id}','App\Http\Controllers\notification_controller@show');

            route::get('edit/{id}','App\Http\Controllers\notification_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\notification_controller@update');

            route::get('delete/{id}','App\Http\Controllers\notification_controller@destroy');
        });


        Route::group(['prefix'=>'conversations', 'middleware'=>'checkLogin'],function(){
            route::get('','App\Http\Controllers\conversation_controller@index');

            route::get('create','App\Http\Controllers\conversation_controller@create');

            route::post('create','App\Http\Controllers\conversation_controller@store');

            route::get('show/{id}','App\Http\Controllers\conversation_controller@show');

            route::get('edit/{id}','App\Http\Controllers\conversation_controller@edit');

            route::post('edit/{id}','App\Http\Controllers\conversation_controller@update');

            route::get('delete/{id}','App\Http\Controllers\conversation_controller@destroy');
        });


        route::get('research','App\Http\Controllers\research_controller@search');
        route::post('research','App\Http\Controllers\research_controller@getSearchAjax')->name('search');
    });


   

    Route::group(['prefix'=>'user'],function(){
        route::get('write_post','App\Http\Controllers\User\write_post_controller@index');
        route::post('create_post','App\Http\Controllers\User\write_post_controller@createPost');
        route::get('post_detail/{id}','App\Http\Controllers\User\post_detail_controller@show');
        route::get('followings','App\Http\Controllers\User\followings_controller@index');
        route::get('followings1','App\Http\Controllers\User\followings_controller@create');  
        route::get('login','App\Http\Controllers\User\login_controller@index');
        route::get('register','App\Http\Controllers\User\register_controller@index');
        route::post('checkLogin','App\Http\Controllers\User\login_controller@checkLogin');
        route::get('checkLogout','App\Http\Controllers\User\login_controller@checkLogout');
    });   

    Route::get('ajax', 'App\Http\Controllers\User\followings_controller@get_home');

    