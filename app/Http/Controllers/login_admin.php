<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class login_admin extends Controller
{
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
            'username'=>'required',
            'password'=>'required|min:6|max:20'
        ],
        [
            'username.required'=>'Bạn chưa nhập Username',
            'password.required'=>'Bạn chưa nhập Password',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
            'password.max'=>'Password không được lơn hơn 20 ký tự',
        ]);
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            //true
            return view ('admin/index');
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
