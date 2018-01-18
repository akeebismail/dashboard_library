<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    //

    protected $fillable = ['name','number_of_seats','user_id','status'];
    public function space(){
        return $this->hasMany(Space::class);
    }

    public function user(){
        return $this->belongsTo(Rooms::class);
    }
}
