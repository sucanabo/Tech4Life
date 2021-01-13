<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\sessionUser;
use App\Models\series;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class series_Controller extends Controller
{
    //
    public function index(Request $request){
        $token = $request->header('token');
        $checkTokenIsValid = sessionUser::where('token',$token)->first();
        if (empty($token)){
            return response()->json([
                'code' => 401,
                'message' => "Token không được gửi qua header"
            ],401);
        }elseif(empty($checkTokenIsValid)){
            return response()->json([
                'code' => 401,
                'message' => "Token không hợp lệ"
            ],401);
        }else{
            $series = series::all();
            return response()->json([
                'code' => 200,
                'data' => $series
            ],200);
        }
    }

    public function refreshToken(Request $request){
        $token = $request->header('token');
        $checkTokenIsValid = sessionUser::where('token',$token)->first();
        if(!empty($checkTokenIsValid)){
            if($checkTokenIsValid->token_expried < time()){
                $checkTokenIsValid->update([
                    'token' => str::random(40),
                    'refresh_token' => str::random(40),
                    'token_expried' => date('Y-m-d H:i:s', strtotime('+30 day')),
                    'refresh_token_expried' => date('Y-m-d H:i:s', strtotime('+360 day')),
                    
                ]);
            }
        }
        $dataSession = sessionUser::find($checkTokenIsValid->id);
        return response()->json([
            'code' => 200,
            'data' => $dataSession,
            'data' => "Refresh_token thành công"
        ],200); 
    }

    public function getAPI(){
        $s = DB::table('series')
            ->join('users', 'series.user_id', '=', 'users.id')
            ->select('series.*', 'users.username', 'users.avatar')
            ->get();

            return response()->json($s);
    }
}
