<?php

namespace App\Http\Controllers;

use App\LibraryDays;
use App\Rooms;
use App\Space;
use Illuminate\Http\Request;

class LibraryDayController extends Controller
{
    //

    public function getCurrentDay(){
        $lib = LibraryDays::where('library_day','=', date('D'))->first();

        $date = date('Y/m/d');
        $rooms = Rooms::all();
        foreach ($rooms as $room){
            $space = new Space;
            $space->rooms_id = $room->id;
            $space->for_day = $date;
            $space->occupied =0;
            $space->status = 1;
            $space->save();
        }

        return $rooms;
    }

    public function getOpeningTime(){}

    public function getClosingTime(){}
}
