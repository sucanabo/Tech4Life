<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{
    use HasFactory;
    protected $table="conversation";
       // 1-n
    public function post(){
        return $this->belongsTo('App\Models\post','post_id','id');
        } 
        // n-n
    public function post_comment(){
        return $this->hasMany('App\Models\post_comment','conversation_id','id');
        } 
}
