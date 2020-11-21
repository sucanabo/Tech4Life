<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    use HasFactory;
    protected $table="notification";

    public function User(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
