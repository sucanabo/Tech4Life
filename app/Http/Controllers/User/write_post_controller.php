<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
class write_post_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("user/write-post");
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

    public function createPost(Request $request)
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
        $post = new post;
        $post->user_id= $request->user_id;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->status= 1;
        $post->view= 1;
        $post->vote= 1;
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
        return redirect('user/followings');
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
