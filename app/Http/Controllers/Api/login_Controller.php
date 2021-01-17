<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\sessionUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class login_Controller extends Controller
{
    //
    public function login(Request $request){
        $dataCheckLogin=[
            'email' => $request->email,
            'password' => $request->password,
        ];
        //xác thực user đã có tài khoản hay chưa
        if( auth()->attempt($dataCheckLogin) )
        {
            $check = User::where('id',auth()->id())->first();
            $checkTokenExit = sessionUser::where('user_id',auth()->id())->first();
            if(empty($checkTokenExit)){
                $userSession = sessionUser::create([
                    'token' => str::random(40),
                    'refresh_token' => str::random(40),
                    'token_expried' => date('Y-m-d H:i:s', strtotime('+30 day')),
                    'refresh_token_expried' => date('Y-m-d H:i:s', strtotime('+360 day')),
                    'user_id' => auth()->id() 
                ]);             
            }
            else{
                $userSession = $checkTokenExit;
            } 
        $data = sessionUser::select('token')->where('user_id','=',auth()->user()->id)->first();

         return response()->json([
             'status'=>'success',
             'token'=>$data->token,
             'username'=> auth()->user()->username,
             'email'=> auth()->user()->email,
             'displayname'=>auth()->user()->display_name,
             'avatar'=> auth()->user()->avatar,
             'id'=> auth()->user()->id
         ]);
        }
        else{
            return response()->json([
                'status'=>'failure',
            ]);
        }
    }





    

    public function login1(Request $request){
        $dataCheckLogin=[
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        //xác thực user đã có tài khoản hay chưa
        if( auth()->attempt($dataCheckLogin) ){
            $userSession = 1;
        }
        else{
                $userSession = 0;
        }
        
        return response()->json([
            'code'=> 200,
            'data'=> $userSession
        ],200);
    }

   
}


