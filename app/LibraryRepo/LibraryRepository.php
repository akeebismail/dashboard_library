<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/17/18
 * Time: 5:45 PM
 */

namespace App\LibraryRepo;

use App\LibraryDays;
use App\Rooms;
use App\Space;
use Carbon\Carbon;

class LibraryRepository{

    public  $libDay ;

    public function __construct($day = null)
    {
        $this->libDay = new  LibraryDays();
    }
    /**
     * Get the day opening_time
     * return @LibraryDays opening_time
     */
    public function getOpeningTime(){
         $time = $this->libDay->find(Carbon::now()->dayOfWeek);

        return date('Y/m/d').' '.$time->opening_time;
    }

    /**
     * Get the day closing_time
     *
     * @return 'date_time'
     */

    public function getClosingTime(){
        $time = $this->libDay->find(Carbon::now()->dayOfWeek);


        return date('Y/m/d').' '.$time->closing_time;
    }

    /**
     * Check if space have been created for today
     * @return boolean
     */
    public function isTodaySet(){

        return Space::where('for_day',Carbon::today())->exists();
    }
    /**
     * Start the count
     * Create empty space
     * @param int dayOfWeek
     * @return void
     */

    public function startDay(){
        if (!$this->isTodaySet()){
            $rooms = Rooms::all();
            foreach ($rooms as $room){
                $space = new Space;
                $space->room_id = $room->id;
                $space->occupied = 0;
                $space->status = 1;
                $space->for_day = Carbon::today();
                $space->save();
            }
        }

    }

    public function setTomorrow(){
        if (!Space::where('for_day', Carbon::parse('tomorrow'))->exists()){
            $rooms = Rooms::all();
            foreach ($rooms as $room){
                $space = new Space;
                $space->room_id = $room->id;
                $space->occupied = 0;
                $space->status = 1;
                $space->for_day = Carbon::parse('tomorrow');
                $space->save();
            }
        }
    }
    /**
     * close library for today
     *
     */
    public function closeLibrary(){
        foreach ($this->allRoomSpace() as $item){
            $item->status = 2;
            $item->update();
        }

        $this->setTomorrow();
    }

    /**
     * all the rooms and space occupied
     * @return Space
     */

    public function allRoomSpace(){
        $space = Space::where('for_day',Carbon::today())->get();

        return $space;
    }


    /**
     * get room counts
     *
     * @param Carbon::today()
     *
     * @return  Rooms
     */

    public function roomCount($room){
        $space = Space::find(['for_day'=>Carbon::today(),'rooms_id'=>$room])->first();

        return $space;
    }

    public function checkForHoliday(){

    }

    public function checkDayException(){

    }

    public function isOpened(){
        return $this->getOpeningTime() <= Carbon::now()? true: false;
    }

    public function isClosed(){
        return $this->getClosingTime() <= Carbon::now()? true : false;
    }
    public function setClosingTime(){

    }

    public function setOpeningTime(){

    }

    public function setHoliday(){

    }

    public function setDayException(){

    }
}