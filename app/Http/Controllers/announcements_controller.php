<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\announcement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class announcements_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $announcement= DB::table('announcement')->paginate(15);
        return view('admin/annountcements/index',['announcement'=>$announcement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/annountcements/create');
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
        $annountcement = new announcement;
        $annountcement->title = $request->title;
        $annountcement->content = $request->content;
        $annountcement->save();
        return redirect('admin/announcements/')->with('thongbao','Thêm thành công');
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
        $announcement= announcement::find($id);
        return view('admin/annountcements/edit',['announcement'=>$announcement]);
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
        $annountcement= announcement::find($id);
        $annountcement->title = $request->title;
        $annountcement->content = $request->content;
        $annountcement->save();
        return redirect('admin/announcements/')->with('thongbao','Sửa thành công');
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
        $announcement=announcement::find($id);
        $announcement->delete();
        return redirect('admin/annountcements/')->with('thongbao','Xóa thành công');
    }
}
