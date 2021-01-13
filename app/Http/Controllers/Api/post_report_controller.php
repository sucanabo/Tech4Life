<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\post_report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class post_report_controller extends Controller
{
    //
    public function post_report(Request $request){
        {
            $post_report = new post_report;
            $post_report->user_id= $request -> user_id;
            $post_report->post_id= $request -> post_id;
            $post_report->reason= $request -> reason;
            $post_report->message= $request -> message;
            $post_report->status= 1;
            
            if($post_report->save()){
                return response()->json([
                    'code'=> 200,
                    'message'=> 'Đã lưu'
                ],200);
            }
            else
            {
                return response()->json([
                    'code'=> 200,
                    'message'=> 'Chưa lưu'
                ],200);
            }
            
        }
      }
}
