<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class user_vote_cotroller extends Controller
{
    //
    public function up_vote(Request $request){
        {
            $posts = post::all();

        
            
            if (post::where('id',$request -> post_id )->update(['vote'=>1])){
             
                    return response()->json([
                      'code'=> 200,
                      'message'=> 'Đã vote'
                  ],200);
                
            }
            else
            {
              return response()->json([
                'code'=> 200,
                'message'=> 'Chưa vote'
            ],200);
            }  
        }
      }
}
