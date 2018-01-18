<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryDays extends Model
{
    //
    protected $fillable = ['library_day','opening_time','closing_time','status'];
}
