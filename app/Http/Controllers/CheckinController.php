<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Space;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $user = auth()->user();
        $room = Rooms::find($user->room_id);
        //return $user->roomAssigned[0];
        $space = Space::where('room_id','=',$room->id)->where('for_day','=',Carbon::today())->first();
        //return $space;
        return view('admin',['room'=> $room,'space'=>$space]);
    }

    public function show($id){

    }

    public function checkout(Request $request){
        $space = Space::find($request->id);
        $space->for_day = Carbon::today();
        $space->occupied -= 1;
        $space->update();

        return back();
    }

    public function checkin(Request $request){
        //space id;
        $space = Space::find($request->id);
        $space->for_day = Carbon::today();
        $space->occupied += 1;
        $space->update();
        return back();
    }
}
