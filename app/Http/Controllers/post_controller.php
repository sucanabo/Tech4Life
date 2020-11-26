<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\post;


class post_controller extends Controller
{
    public function index(){
       
        $posts = DB::select('select * from post', [1]);

        return view('admin/post/posts', ['post' => $posts]);
    }
}
