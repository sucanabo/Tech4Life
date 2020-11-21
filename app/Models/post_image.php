<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_image extends Model
{
    use HasFactory;
    protected $table="post_image";
    // 1-1
    public function post(){
        return $this->belongsTo('App\Models\post','post_id','id');
    }
}
