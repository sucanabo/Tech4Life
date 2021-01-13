<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\sessionUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class logout_controller extends Controller
{
    //
    public function checkLogout(){
            if (Auth::check()) {
                $id=1;
            }else
            {
                $id=2;
            }
            return response()->json([
                'code'=> 200,
                'data1'=> $id
            ],200);
        }
    
   
   
}
