<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category_follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class category_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::select('SELECT * FROM category');

        return response()->json($category);
    }
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function follow(Request $request)
    {
        $category = new category_follow;
        $category->user_id= $request -> user_id;
        $category->category_id= $request -> category_id;
        if (category_follow::where('user_id',$request->user_id )->Where('category_id', $request -> category_id)->delete()){
            
            return response()->json([
                'status'=> 'unfollowed'
            ],200);
            
        }
        else
        {
          $category->save();
          return response()->json([
            'status'=> 'followed'
        ],200);
        }  
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
    public function getFollowingPost($id)
    {
        $post = DB::select("
            SELECT post.id,post.title,post.vote, post.view, post.image_title,
                    post.created_at, users.display_name, users.avatar,
                    users.username,
                    count(post_clip.post_id) as clipped,
                    count(comments.post_id) as comment,
                    post.content
            FROM users, post_category, post
                LEFT JOIN vote_post ON vote_post.post_id = post.id
                LEFT JOIN post_clip ON post_clip.post_id = post.id
                LEFT JOIN comments ON comments.post_id = post.id
            WHERE users.id = post.user_id and 
                post.id = post_category.post_id and 
                post_category.category_id in (
                    SELECT category_follow.category_id
                    FROM category_follow
                    WHERE category_follow.user_id = ".$id."
                    )
            GROUP BY post.id");

        return response()->json($post);
    }
}
