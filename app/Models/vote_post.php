<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote_post extends Model
{
    use HasFactory;
    protected $table="vote_post";

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function post(){
        return $this->belongsTo('App\Models\post','post_id','id');
    }

}