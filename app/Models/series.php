<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class series extends Model
{
    use HasFactory;
    protected $table="series";
    // 1-1
    public function User(){
        return $this->hasOne('App\Models\User','user_id','id');
    }
    //1-n
    public function series_clip(){
        return $this->hasMany('App\Models\series_clip','series_id','id');
    }
}
