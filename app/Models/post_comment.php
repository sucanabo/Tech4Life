<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
    use HasFactory;
    protected $table="post_comment";

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

     // 1-1
     public function conversation(){
        return $this->belongsTo('App\Models\conversation','conversation_id','id');
    }

     // 1-1
     public function post_comment(){
        return $this->belongsTo('App\Models\post_comment','post_id','id');
    }
}
