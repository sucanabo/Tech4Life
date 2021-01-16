<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class display_controller extends Controller
{
    //
     //
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $total_user = DB::table('users')->count('id');
        $total_series = DB::table('series')->count('id');
        $total_posts = DB::table('post')->count('id');
        $total_view = DB::table('post')->sum('view');
        $top_four = DB::table('post')->orderBy('view','desc')->limit(4)->get();
        $notification = DB::table('notification')->orderBy('created_at','desc')->limit(1)->get();
        $user_report = DB::table('user_report')->orderBy('created_at','desc')->limit(1)->get();
        $post_report = DB::table('post_report')->orderBy('created_at','desc')->limit(1)->get();
        return view('admin/home/index',['users'=>$total_user,'series'=>$total_series,'posts'=>$total_posts,'views'=>$total_view,
        'noti'=>$notification,'top_four'=>$top_four,'post_report'=>$post_report,'user_report'=>$user_report]);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
