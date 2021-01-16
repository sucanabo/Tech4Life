<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class search_controller extends Controller
{
    //
    public function search(Request $request){
        $post = $data = DB::table('post','series')
        ->where('title', 'LIKE', "%{$request->search}%")->orwhere('content', 'LIKE', "%{$request->search}%")
        ->get();
        $users = DB::table('users')->limit(5)->get();
        $top_post = DB::table('post')->orderBy('created_at','desc')->limit(3)->get();
        $top_series = DB::table('series')->orderBy('created_at','desc')->limit(3)->get();
        return view("user/followings",['post'=>$post,'user'=>$users,'top_series'=>$top_series,'top_post'=>$top_post]);
    }
}
