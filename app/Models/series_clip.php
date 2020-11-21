<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class series_clip extends Model
{
    use HasFactory;
    protected $table="series_clip";
    // 1-1
    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function series(){
        return $this->belongsTo('App\Models\series','series_id','id');
    }
}
