<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\user_follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class user_follow_controller extends Controller
{
    //
    public function follow_user(Request $request){
    {
        $user_follow = new user_follow;
        $user_follow->user_id= $request -> user_id;
        $user_follow->post_id= $request -> post_id;
        if (user_follow::where('post_id',$request -> post_id )->Where('user_id', $request -> user_id)->delete()){
         
                return response()->json([
                  'code'=> 200,
                  'message'=> 'Đã tồn tại'
              ],200);
            
        }
        else
        {
          $user_follow->save();
          return response()->json([
            'code'=> 200,
            'message'=> 'Chưa tồn tại'
        ],200);
        }  
    }
  }
 
}
