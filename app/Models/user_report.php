<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_report extends Model
{
    use HasFactory;
    protected $table="user_report";

     // 1-1
     public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
