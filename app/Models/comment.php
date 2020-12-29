<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table="comment";

    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function Post(){
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}
