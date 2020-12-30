<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'password',
        'email',
        'phone_number',
        'display_name',
        'avatar',
        'view',
        'gender',
        'status',
        'permission',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);
 
        $words = explode(' ', $term);
 
        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 1) {
                $words[$key] = '+' . $word  . '*';
            }
        }
        
        $searchTerm = implode(' ', $words);
 
        return $searchTerm;
    }
 
    public function scopeFullTextSearch($query, $columns, $term)
    {
        $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $this->fullTextWildcards($term));
 
        return $query;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];
    // 1-n

    public function post(){
        return $this->hasMany('App\Models\post','user_id','id');
    }
    
    // 1-n
   
    // 1-n
    public function post_clip(){
        return $this->hasMany('App\Models\post_clip','user_id','id');
    }
    // 1-n
    public function user_follow(){
        return $this->hasMany('App\Models\user_follow','user_id','id');
    }
    // 1-n
    public function category_follow(){
        return $this->hasMany('App\Models\category_follow','user_id','id');
    }
    // 1-n
    public function user_report(){
        return $this->hasMany('App\Models\user_report','user_id','id');
    }
    // 1-n
    public function series(){
        return $this->hasMany('App\Models\series','user_id','id');
    }
    // 1-n
    public function series_clip(){
        return $this->hasMany('App\Models\series_clip','user_id','id');
    }
     // 1-n
     public function post_report(){
        return $this->hasMany('App\Models\post_report','user_id','id');
    }
     // 1-n
     public function notifications(){
         return $this->hasMany('App\Models\notifications','user_id','id');
    }

    public function SessionUser(){
        return $this->hasOne('App\Models\SessionUser','user_id','id');
    }

    public function commemt(){
        return $this->hasOne('App\Models\comment','user_id','id');
    }
}
