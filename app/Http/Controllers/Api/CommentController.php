<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\post;
use App\Models\comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
    public function getAll()
    {
        $comments = DB::table('comments')->get();
        //
        return response()->json($comments);
    }
    public function getByPost($id)
    {
        $post = DB::select("
            SELECT comments.content, comments.publish_date , users.avatar, users.display_name
            FROM users, comments, post
            WHERE comments.post_id = ".$id." and comments.user_id = users.id
            GROUP BY comments.id
        ");

        return response()->json($post);
    }
    public function createComment(Request $request)
    {
        $comment = new comment;

        $comment->user_id= $request -> user_id;
        $comment->post_id= $request -> post_id;
        $comment->content= $request -> content;
        
        $comment->save();

        $postedComment = DB::select("
        SELECT comments.content, comments.publish_date, users.display_name, users.avatar
        FROM users, comments
        WHERE comments.id =".$comment->id." and comments.user_id = users.id");
        return response()->json($postedComment[0]);
    
    }
}
