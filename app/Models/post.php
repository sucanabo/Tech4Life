<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table="post";
    protected $primaryKey = 'id';
    // 1-1
    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    // 1-n
    public function  vote_post(){
        return $this->hasMany('App\Models\vote_post','post_id','id');
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
    public function post_image(){
        return $this->hasMany('App\Models\post_image','post_id','id');
    }

    public function comment(){
        return $this->hasMany('App\Models\comment','post_id','id');
    }
}
