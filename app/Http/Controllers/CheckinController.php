<?php

namespace App\Http\Controllers;

use App\Space;
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
        $room = $user->roomAssigned[0];
        //return $user->roomAssigned[0];
        $space = Space::where('rooms_id','=',$room->id)->where('for_day','=','2018-01-15')->get();
        ///return $space;
        return view('admin',['room'=>$user->roomAssigned[0],'space'=>$space[0]]);
    }

    public function show($id){

    }

    public function checkout(Request $request){
        $space = Space::find($request->id);
        $space->occuppied -= 1;
        $space->update();

        return back();
    }

    public function checkin(Request $request){
        //space id;
        $space = Space::find($request->id);
        $space->occuppied += 1;
        $space->update();
        return back();
    }
}
