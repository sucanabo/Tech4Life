<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return response()->json([$users]);
    }

    public function notifications(){
        $notifications = notifications::all();

        return response()->json($notifications);
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
        dd("register");
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
    public function login(Request $request){
        $dataCheckLogin=[
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        //xác thực user đã có tài khoản hay chưa
        if( auth()->attempt($dataCheckLogin) ){
            $checkTokenExit = sessionUser::where('user_id',auth()->id())->first();
            if(empty($checkTokenExit)){
                $userSession = sessionUser::create([
                    'token' => str::random(40),
                    'refresh_token' => str::random(40),
                    'token_expried' => date('Y-m-d H:i:s', strtotime('+30 day')),
                    'refresh_token_expried' => date('Y-m-d H:i:s', strtotime('+360 day')),
                    'user_id' => auth()->id() 
                ]);
                return "success";
            }else{
                $userSession = $checkTokenExit;
                return "success";
            }
        }else{
            return "failure";
        }
        
        // return response()->json([
        //     'code'=> 200,
        //     'data'=> $userSession
        // ],200);
    }
}
