<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/17/18
 * Time: 5:45 PM
 */

namespace App\LibRepo;

use App\LibraryDays;
class LibraryRepository{

    private  $libDay ;

    public function __construct()
    {
        $this->libDay = new  LibraryDays;
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