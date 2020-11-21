<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_clip extends Model
{
    use HasFactory;
    protected $table="post_clip";
     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

     // 1-1
     public function post(){
        return $this->belongsTo('App\Models\post_clip','post_id','id');
    }
}
