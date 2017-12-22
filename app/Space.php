<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    //
    protected $fillable =['room_id','occupied','status'];

    public function room(){
        return $this->hasOne(Hall::class);
    }

}
