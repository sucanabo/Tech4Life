<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_category extends Model
{
    use HasFactory;
    protected $table="post_category";
     // 1-1
     public function post(){
        return $this->belongsTo('App\Models\post','post_id','id');
    }

     // 1-1
     public function category(){
        return $this->belongsTo('App\Models\category','category_id','id');
    }
}
