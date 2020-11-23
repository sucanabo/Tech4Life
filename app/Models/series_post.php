<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class series_post extends Model
{
    use HasFactory;
    protected $table="series_post";
    // 1-1
    public function series(){
        return $this->belongsTo('App\Models\series','series_id','id');
    }
    // 1-1
    public function post(){
        return $this->belongsTo('App\Models\post','post_id','id');
    }
}
