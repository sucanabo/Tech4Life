<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\series;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class statistical_controller extends Controller
{
    //
    public function data(){
        $user=DB::table('users')->select('id')->count();
        return view('admin/home/index',['user'=>$user]);
    }
    
}
