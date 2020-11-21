<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table="post";

    // 1-1
    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    // 1-n
    public function  post_comment(){
        return $this->hasMany('App\Models\post_comment','post_id','id');
    }

     // 1-n
     public function  post_clip(){
        return $this->hasMany('App\Models\post_clip','post_id','id');
    }

      // 1-n
      public function  post_category(){
        return $this->hasMany('App\Models\post_category','post_id','id');
    }
      // n-n
    public function  series_post(){
        return $this->hasMany('App\Models\series_post','post_id','id');
    }
      // 1-n
    public function conversation(){
        return $this->hasMany('App\Models\conversation','post_id','id');
    }
     // 1-n
    public function post_image(){
        return $this->hasMany('App\Models\post_image','post_id','id');
    }
}
