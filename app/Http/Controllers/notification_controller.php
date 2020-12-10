<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class notification_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notification= DB::table('notification')->paginate(12);
        return view('admin/notifacation/index',['notification'=>$notification]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/notifacation/create');
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
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'content.required'=>'Bạn chưa nhập content',
        ]);
        $notification = new notifications;
        $notification->user_id= $request->user_id;
        $notification->title= $request->title;
        $notification->content= $request->content;
        $notification->status= 1;
        $notification->save();
        return redirect('admin/notifications/')->with('thongbao','Thêm thành công');
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
        $notification= notifications::find($id);
        return view('admin/notifacation/edit',['notification'=>$notification]);
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
            'title'=>'required',
            'content'=>'required',
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'content.required'=>'Bạn chưa nhập content',
        ]);
        $notification= notifications::find($id);
        $notification->user_id= $request->user_id;
        $notification->title= $request->title;
        $notification->content= $request->content;
        $notification->status= 1;
        $notification->save();
        return redirect('admin/notifications/')->with('thongbao','Sửa thành công');
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
        $notification=notifications::find($id);
        $notification->delete();
        return redirect('admin/notifications/')->with('thongbao','Xóa thành công');
    }
}
