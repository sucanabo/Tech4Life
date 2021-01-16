<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class post_detail_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("user/post_detail");
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
        $post=post::find($id);
        $user=$post->User;
        $query = post::findOrFail($id);
        $query->increment('view');
        $query->save();
        $top_post = DB::table('post')->orderBy('created_at','desc')->limit(3)->get();
        $top_series = DB::table('series')->orderBy('created_at','desc')->limit(3)->get();
        $post_relate = DB::table('post')->orderBy('created_at','desc')->limit(4)->get();
        $post_more_author = DB::table('post')->limit(4)->get();
        $comment = comment::where('post_id',$id)->get();
        return view('user/post_detail',['post'=>$post,'user'=>$user,'top_series'=>$top_series,'top_post'=>$top_post,
        'post_more_author'=>$post_more_author,'post_relate'=>$post_relate,'comment'=>$comment]);
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
