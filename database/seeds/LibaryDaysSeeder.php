<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LibaryDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lib = new  \App\LibraryDays();
        $lib->id = 1;
       $lib->library_day = 'Mon';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(22);
       $lib->save();

       $lib = new  \App\LibraryDays();
       $lib->id = 2;
       $lib->library_day = 'Tue';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(22);
       $lib->save();

       $lib = new  \App\LibraryDays();
       $lib->id = 3;
       $lib->library_day = 'Wed';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(22);
       $lib->save();

       $lib = new  \App\LibraryDays();
        $lib->id = 4;
       $lib->library_day = 'Thu';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(22);
       $lib->save();
       $lib = new  \App\LibraryDays();
        $lib->id = 5;
       $lib->library_day = 'Fri';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(10);
       $lib->save();

       $lib = new  \App\LibraryDays();
        $lib->id = 6;
       $lib->library_day = 'Sat';
       $lib->opening_time = Carbon::createFromTime(8);
       $lib->closing_time = Carbon::createFromTime(16);
       $lib->save();

       $lib = new  \App\LibraryDays();
        $lib->id = 0;
       $lib->library_day = 'Sun';
       $lib->opening_time = Carbon::createFromTime(14);
       $lib->closing_time = Carbon::createFromTime(22);
       $lib->save();
    }
}
