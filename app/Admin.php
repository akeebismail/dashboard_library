<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    protected $fillable= ['first_name','last_name','username','password','hall_id','level','status'];

    public function hall(){
        return $this->hasOne(Hall::class);
    }

}
