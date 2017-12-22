<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    //
    protected $table= 'rooms';
    protected $fillable = ['name','number_seat'];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function space(){
        return $this->hasMany(Space::class);
    }
}
