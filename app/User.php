<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','username','status','level', 'password','room_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        return  $this->level ==2;
    }
    public function isLibrarian(){
        return $this->level == 1;
    }

    public function roomAssigned(){
        return $this->belongsTo(Rooms::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
