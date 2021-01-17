<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email',
            'display_name'=>'required',
           
            
        ],
        [
            'username.required'=>'Bạn chưa nhập Username',
            'display_name.required'=>'Bạn chưa nhập Display_name',
        
    
            'email.required'=>'Bạn chưa nhập Email',
            'email.email'=>'Email phải có  @ ',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
        ]);

        $check=User::where('username',$request->username)->where('email',$request->email)->first();
            if(empty($check)){
            $User=new User;
            $User->username=$request->username;
            $User->password =bcrypt($request->password) ;
            $User->email =$request->email; 
            $User->phone_number ='0774740192'; 
            $User->display_name =$request->display_name; 
            $User->avatar ='1.jpg'; 
            $User->view = 1; 
            $User->gender = 1; 
            $User->status = 1; 
            $User->permission =0; 
            $User->save();
            return response()->json([
                'code'=> 200,
                'status'=> 'success'
            ],200);
        }
         else{
            return response()->json([
                'code'=> 200,
                'status'=> 'success'
            ],200);   
         }       
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
}
