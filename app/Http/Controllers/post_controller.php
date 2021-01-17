<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class post_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = post::paginate(15);
        return view('admin/posts/index',['post'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/posts/create');
    }


    public function update_lock( $id)
    {
        $User=post::find($id);
        $User->status = 0;
        $User->save();
        return redirect('admin/posts')->with('thongbao','Lock thành công');
    }

    public function update_unlock( $id)
    {
        $User=post::find($id);
        $User->status = 1;
        $User->save();
        return redirect('admin/posts')->with('thongbao','UnLock thành công');
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
            'image_title'=>'required',
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'image_title.required'=>'Bạn chưa nhập hình ảnh',
            'content.required'=>'Bạn chưa nhập content',
        ]);
        echo $request->image_title;
        $post = new post;
        $post->user_id= $request->user_id;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->status= 1;
        $post->view= 1;
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
    	$this->validate($request, [
		    'image_title' => 'image|max:2028',
		], $messages);
        if($request->hasFile('image_title')){
            $file= $request->file('image_title');
            $image=time().'.jpg';
            $file->move("img/img_post",$image);
            $post->image_title=$image;
        }
        $post->save();
        return redirect('admin/posts/')->with('thongbao','Thêm bài viết  thành công');
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
        $post=post::find($id);
        return view('admin/posts/detail',['post'=>$post]);
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
        $post=post::find($id);
        return view('admin/posts/edit',['post'=>$post]);
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
            'view'=>'required',
            'status'=>'required',
        ],
        [
            'title.required'=>'Bạn chưa nhập title',
            'content.required'=>'Bạn chưa nhập content',
            'view.required'=>'Bạn chưa nhập view',
            'status.required'=>'Bạn chưa nhập status',

        ]);
        echo $request->image_title;
        $post=post::find($id);
        $post->user_id= $request->user_id;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->status= $request->status;
        $post->view= $request->view;
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
    	$this->validate($request, [
		    'image_title' => 'image|max:2028',
		], $messages);
        if($request->hasFile('image_title')){
            $file= $request->file('image_title');
            $image=time().'.jpg';
            $file->move("img/img_post",$image);
            $post->image_title=$image;
        }
        $post->save();
        return redirect('admin/posts/')->with('thongbao','Edit bài viết  thành công');
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
