<?php

namespace App\Http\Controllers\Api;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\vote_post;
class vote_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::select('select * from vote_post' );
    }
    public function getVote(Request $request){
        $data = DB::table('vote_post')->where('user_id',$request->user_id)->where('post_id',$request->post_id)->get()->first();
        if($data != null){
            return $data->status;
        }
        return 0;
    }
    public function votePost(Request $request){
        $list_vote = DB::table('vote_post')->where('user_id',$request->user_id)->where('post_id',$request->post_id)->get()->first();
        $post = DB::table('post')->where('id',$request->post_id)->first();
        if($list_vote !=null){
            if($list_vote->status != $request->status){
                DB::table('vote_post')->where('id', $list_vote->id)->update(['status' => $request->status]);
                if($request->status == "1"){
                    DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote + 1]);
                }
                else if($request->status == "-1"){
                    DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote - 1]);
                }
                return "update";
                
            }
            else{
                DB::table('vote_post')->where('id',$list_vote->id)->delete();
                if($request->status == "1"){
                    DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote - 1]);
                }
                else if($request->status == "-1"){
                    DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote + 1]);
                }
                return "delete";
            }
        }
        
        DB::table('vote_post')->insert(['user_id'=>$request->user_id,'post_id' => $request->post_id, 'status' => $request->status]);
        if($request->status == "1"){
            DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote + 1]);
        }
        else if($request->status == "-1"){
            DB::table('post')->where('id',$post->id)->update(['vote'=>$post->vote - 1]);
        }
        return "insert";
        
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
