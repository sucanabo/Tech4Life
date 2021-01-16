<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
  
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
        $users = DB::table('users')->paginate(10);
        return view('admin/user/index',['user'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/user/create');
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
        $users=User::find($id);
        return view('admin/user/detail',['user'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $users=User::find($id);
            return view('admin/user/edit',['user'=>$users]);
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
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email',
            'display_name'=>'required',
            'phone_number'=>'required',
            'view'=>'required',
            'gender'=>'required',
            'status'=>'required',
            'permission'=>'required',
            
        ],
        [
            'username.required'=>'Bạn chưa nhập Username',
            'display_name.required'=>'Bạn chưa nhập Display_name',
            'phone_number.required'=>'Bạn chưa nhập Phone_number',
            'view.required'=>'Bạn chưa nhập View',
            'gender.required'=>'Bạn chưa nhập Gender',
            'avatar.required'=>'Bạn chưa nhập avatar',
            'status.required'=>'Bạn chưa nhập status',
            'permission.required'=>'Bạn chưa nhập Permission',
            'email.required'=>'Bạn chưa nhập Email',
            'email.email'=>'Email phải có  @ ',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
        ]);
        $User=User::find($id);
        if($request->hasFile('avatar')){
            $file= $request->file('avatar');
            $image=time().$request->username.'.jpg';
            $file->move("img",$image);
            $User->avatar=$image;
        }
         $User->username=$request->username;
         $User->password =bcrypt($request->password) ;
         $User->email =$request->email; 
         $User->phone_number =$request->phone_number; 
         $User->display_name =$request->display_name; 
         $User->view =$request->view; 
         
         $User->gender =$request->gender; 
         $User->status =$request->status; 
         $User->permission =$request->permission; 
         $User->save();
         return redirect('admin/users')->with('thongbao','Sửa thành công');

    }

    public function update_lock( $id)
    {
        $User=User::find($id);
        $User->status = 0;
        $User->save();
        return redirect('admin/users')->with('thongbao','Lock thành công');
    }

    public function update_unlock( $id)
    {
        $User=User::find($id);
        $User->status = 1;
        $User->save();
        return redirect('admin/users')->with('thongbao','UnLock thành công');
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
        $User=User::find($id);
        $User->delete();
        return redirect('admin/users')->with('thongbao','Xóa thành công');
    }

    public function postAddUser(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email',
            'display_name'=>'required',
            'phone_number'=>'required',
            'view'=>'required',
            'gender'=>'required',
            'status'=>'required',
            'permission'=>'required',
            
        ],
        [
            'username.required'=>'Bạn chưa nhập Username',
            'display_name.required'=>'Bạn chưa nhập Display_name',
            'phone_number.required'=>'Bạn chưa nhập Phone_number',
            'view.required'=>'Bạn chưa nhập View',
            'gender.required'=>'Bạn chưa nhập Gender',
            'avatar.required'=>'Bạn chưa nhập avatar',
            'email.required'=>'Bạn chưa nhập Email',
            'email.email'=>'Email phải có  @ ',
            'password.min'=>'Password không được nhỏ hơn 6 ký tự',
        ]);
         $User=new User;
         $User->username=$request->username;
         $User->password =bcrypt($request->password) ;
         $User->email =$request->email; 
         $User->phone_number =$request->phone_number; 
         $User->display_name =$request->display_name; 
         $User->avatar =$request->username.'.jpg'; 
         $User->view =$request->view; 
         $User->gender =$request->gender; 
         $User->status =1; 
         $User->permission =0; 
         if($request->hasFile('avatar')){
            $file= $request->file('avatar');
            $image=time().$request->username.'.jpg';
            $file->move("img",$image);
            $User->avatar=$image;
        }
         $User->save();
         return redirect('admin/users')->with('thongbao','Thêm thành công');
     }
}
