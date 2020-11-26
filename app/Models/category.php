<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{


    use HasFactory;
    protected $table="category";

    // 1-n
   public function post_category(){
       return $this->hasMany('App\Models\post_category','category_id','id');
   } 

   // 1-n
   public function category_follow(){
    return $this->hasMany('App\Models\category_follow','category_id','id');
   } 
}
