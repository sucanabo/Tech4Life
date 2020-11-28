<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class login_controller extends Controller
{
    //
    function __construct(){
        if(Auth::check())
        {
            view()->share('user_login',Auth::user());
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/login/login');
    }

    
    // check login 
    public function checkLogin(Request $request){
        //check input
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Bạn chưa nhập Username',
            'email.email'=>'Email phải có  @ ',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
            'password.max'=>'Password không được lơn hơn 20 ký tự',
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            //true
            if(Auth::check())
            {
                view()->share('user_login',Auth::user());
            }
            return view ('admin/home/index');
        }
        else{
            //false
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
        }
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
