<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\post_clip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class postClip_controller extends Controller
{
    //
    public function clipPost(Request $request){
        $post_clip = new post_clip;
        $post_clip->user_id = $request->user_id; 
        $post_clip->post_id = $request->post_id;
        $post_clip->created_at =  date('Y-m-d H:i:s');
        if (post_clip::where('post_id',$request->post_id )->Where('user_id', $request -> user_id)->delete()){
            return "false";
        }
        else if($post_clip->save()){
            return "true";
        }
    }

    public function getClipPost(){
        $listClipPost =DB::select('
        SELECT post.id, post.title, post.vote, post.view, post.image_title,
               post.created_at, users.display_name, users.avatar,
               users.username,
               count(post_clip.post_id) as clipped,
               count(comments.post_id) as comment,
               post.content
               
        FROM post_clip ,users 
        , post
            LEFT JOIN comments ON comments.post_id = post.id

        WHERE users.id = post.user_id and post_clip.user_id = users.id and post_clip.post_id = post.id
        GROUP BY post.id
        ');



        return response()->json($listClipPost);
      }
}
