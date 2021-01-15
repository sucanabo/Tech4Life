<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post_clip;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class post_clip_controller extends Controller
{
    //
    public function post_clip(Request $request){
        {
            $post_clip = new post_clip;
            $post_clip->user_id= $request -> user_id;
            $post_clip->post_id= $request -> post_id;
            if (post_clip::where('post_id',$request->post_id )->Where('user_id', $request -> user_id)->delete()){
                
                    return response()->json([
                      'code'=> 200,
                      'message'=> 'Đã tồn tại'
                  ],200);
              
            }
            else
            {
              $post_clip->save();
              return response()->json([
                'code'=> 200,
                'message'=> 'Chưa tồn tại'
            ],200);
            }  
        }
      }
}
