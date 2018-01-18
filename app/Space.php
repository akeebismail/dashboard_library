<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    //o
    protected $fillable = ['rooms_id','ocuppied','status'];
    public function room(){
        return $this->belongsTo(Rooms::class);
    }
}
