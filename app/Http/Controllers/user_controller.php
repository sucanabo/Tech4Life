<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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
        if($request->hasFile('avatar')){
            $file= $request->file('avatar');
            $file->move('img',str_random(4)."_".$request->username.'.jpg');
        }
         $User=new User;
         $User->display_name=$request->display_name;
         $User->username=$request->username;
         $User->password =bcrypt($request->password) ;
         $User->email =$request->email; 
         $User->phone_number =$request->phone_number; 
         $User->display_name =$request->display_name; 
         $User->avatar =$request->username.'.jpg'; 
         $User->view =$request->view; 
         $User->gender =$request->gender; 
         $User->status =$request->status; 
         $User->permission =$request->permission; 
         $User->save();
         return redirect('admin/users')->with('thongbao','Thêm thành công');
     }
}
