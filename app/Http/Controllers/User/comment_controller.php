<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class comment_controller extends Controller
{
    //
    public function comment(Request $request, $id)
    {
        //
        $comment = new comment;
        $comment->content = $request->comment__editor;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $id;
        $comment->publish_date = date('Y-m-d H:i:s', strtotime('+30 day'));
        $comment->status = 1;
        $comment->save();
        return redirect("post_detail/$id");
    }

    
}
