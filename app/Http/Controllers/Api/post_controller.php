<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
            //$post = post::all();
            $post = DB::select('
            SELECT post.id,post.title,post.vote, post.view, post.image_title,
                   post.created_at, users.display_name, users.avatar,
                   users.username,
                   count(post_clip.post_id) as clipped,
                   count(comments.post_id) as comment,
                   post.content
                   
            FROM users, post
                LEFT JOIN vote_post ON vote_post.post_id = post.id
                LEFT JOIN post_clip ON post_clip.post_id = post.id
                LEFT JOIN comments ON comments.post_id = post.id
            WHERE users.id = post.user_id
            GROUP BY post.id
            ');

            return response()->json($post);
    }
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getVote($id){
        $data = DB::table('post')->where('id',$id)->get()->first();
        return $data->vote;
    }
    public function searchpost($search){
        $post = DB::table('post')
        ->join('users', 'post.user_id', '=', 'users.id')
        ->where('title','like','%'.$search.'%')
        ->select('post.*', 'users.display_name', 'users.avatar')
        ->get();
        return response()->json($post);
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
    public function update($id)
    {
        $countView = DB::update('
        UPDATE post
        SET post.view = post.view +1
        WHERE post.id = '.$id);

        return response()->json($countView);
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

    public function statisticPost($id){
        $countPost = DB::select('
        SELECT count(post.id) as post
        FROM post, users
        WHERE post.user_id = users.id and users.id ='.$id);
        return $countPost;
    }
    
    public function statisticView($id){
        $countPost = DB::select('
        SELECT sum(post.view) as view
        FROM post, users
        WHERE post.user_id = users.id and users.id ='.$id);
        return $countPost;
    }
}
