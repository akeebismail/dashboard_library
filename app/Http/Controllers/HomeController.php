<?php

namespace App\Http\Controllers;

use App\LibraryRepo\TransformTrait\SpaceRoomTranform;
use App\Space;
use Illuminate\Http\Request;
use App\LibraryRepo\LibraryRepository;

class HomeController extends Controller
{
    use SpaceRoomTranform;

    public  $library ;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(LibraryRepository $lib)
    {
        $this->middleware('lib_open');
        $this->library = $lib;

        $this->library->isTodaySet() ? : $this->library->startDay();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = $this->library->getClosingTime();
        $library  = $this->library->allRoomSpace();

        $list = $library->map(function (Space $space){
            return $this->spaceRoom($space);
        })->all();

        //return $library;

        return view('home')->with(['time'=>$time,'space'=>$list]);
    }

    public function getOpeningTime(){

    }

    public function closeLibrary(){
        //close today activity
        $this->library->closeLibrary();

        return 'thank you library closed for the day';
        //set for tomorrow
    }

}
