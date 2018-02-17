<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/17/18
 * Time: 5:45 PM
 */

namespace App\LibraryRepo;

use App\LibraryDays;
class LibraryRepository{

    public  $libDay ;

    public function __construct($day = null)
    {
        $this->libDay = new  LibraryDays(['library_day'=>$day]);
    }

    public function getOpeningTime(){

    }

    public function getClosingTime(){}


    public function checkForHoliday(){

    }

    public function checkDayException(){

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