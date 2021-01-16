<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class register_controller extends Controller
{
    //
    public function index()
    {
        //
        return view("user/register");
    }

    public function update_register(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email',
            'displayname'=>'required',
           
            
        ],
        [
            'username.required'=>'Bạn chưa nhập Username',
            'displayname.required'=>'Bạn chưa nhập Display_name',
            'email.required'=>'Bạn chưa nhập Email',
            'email.email'=>'Email phải có  @ ',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
        ]);
         $User=new User;
         $User->username=$request->username;
         $User->password =bcrypt($request->password) ;
         $User->email =$request->email; 
         $User->phone_number = '0774740195'; 
         $User->display_name =$request->displayname; 
         $User->avatar =$request->username.'.jpg'; 
         $User->view = 100; 
         $User->gender = 1; 
         $User->status = 1; 
         $User->permission =0; 
         $User->save();
         return redirect('register')->with('thongbao','Thêm tài khoản  thành công');
     }
}
