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
class delete_token extends Controller
{
    //
    public function deleteToken(Request $request){
       $token = $request -> header('token');
       $checkToken =sessionUser::where('token',$token)->first();
       if(!empty($checkToken)){
          $checkToken->delete();
       }
        
        return response()->json([
            'code'=> 200,
            'message'=> 'Delete sucess'
        ],200);
        
    }
}
