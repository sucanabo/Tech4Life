<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\series;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class series_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $series= DB::table('series')->paginate(15);
        return view('admin/series/index',['series'=>$series]);
    }


    public function update_lock( $id)
    {
        $User=series::find($id);
        $User->status = 0;
        $User->save();
        return redirect('admin/series')->with('thongbao','Lock thành công');
    }

    public function update_unlock( $id)
    {
        $User=series::find($id);
        $User->status = 1;
        $User->save();
        return redirect('admin/series')->with('thongbao','UnLock thành công');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/series/create');
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
            'description'=>'required', 
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'description.required'=>'Bạn chưa nhập description',
        ]);
        $series = new series;
        $series->title = $request->title;
        $series->description = $request->description;
        $series->user_id= $request->user_id;
        $series->vote=0;
        $series->view=0;
        $series->status=1;
        $series->save();
        return redirect('admin/series/')->with('thongbao','Thêm thành công');
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
        $series= series::find($id);
        return view('admin/series/show',['series'=>$series]);
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
        $series= series::find($id);
        return view('admin/series/edit',['series'=>$series]);
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
            'description'=>'required', 
            'vote'=>'required',
            'view'=>'required',
            'user_id'=>'required',
            'status'=>'required',
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'description.required'=>'Bạn chưa nhập description',
            'vote.required'=>" Ô vote bị chưa có dữ liệu",
            'view.required'=>" Ô view chưa có dữ liệu ",
            'user_id.required'=>" Ô user_id chưa có sữ liệu ",
            'status.required'=>" Ô status chưa có dữ liệu ",
        ]); 
        echo $request->title;
        echo $request->description;
        echo $request->user_id;
        echo $request->vote;
        echo $request->view;
        echo $request->status;

        $series=series::find($id);
        $series->title = $request->title;
        $series->description = $request->description;
        $series->user_id= $request->user_id;
        $series->vote=$request->vote;
        $series->view=$request->view;
        $series->status=$request->status;
        $series->save();
        return redirect('admin/series/')->with('thongbao','sửa thành công');
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
        $Series=series::find($id);
        $Series->delete();
        return redirect('admin/series/')->with('thongbao','Xóa thành công');
    }
}
