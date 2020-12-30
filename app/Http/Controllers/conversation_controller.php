<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\series;
use App\Models\conversation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class conversation_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conversation= DB::table('conversation')->paginate(10);
        return view('admin/conversations/index',['conversation'=>$conversation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/conversations/create');
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
            'post_id'=>'required',
        ],
        [
            'post_id.required'=>'Bạn chưa chọn bài viết',
        ]);
        $conversation = new conversation;
        $conversation->post_id= $request->post_id;
        $conversation->save();
        return redirect('admin/conversations/')->with('thongbao','Thêm thành công');
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
        $conversation= conversation::find($id);
        return view('admin/conversations/edit',['conversation'=>$conversation]);
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
            'post_id'=>'required',
        ],
        [
            'post_id.required'=>'Bạn chưa chọn bài viết',
        ]);
        $conversation= conversation::find($id);
        $conversation->post_id= $request->post_id;
        $conversation->save();
        return redirect('admin/conversations/')->with('thongbao','Sửa thành công');
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
        $conversation=conversation::find($id);
        $conversation->delete();
        return redirect('admin/conversations/')->with('thongbao','Xóa thành công');
    }
}
