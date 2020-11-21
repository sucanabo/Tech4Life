<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_follow extends Model
{
    use HasFactory;
    protected $table="category_follow";

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

     // 1-1
     public function category(){
        return $this->belongsTo('App\Models\category','category_id','id');
    }

}
