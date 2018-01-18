<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Mon';
        $lib->opening_time = 8;
        $lib->closing_time = 10;
        $lib->save();

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Tue';
        $lib->opening_time = 8;
        $lib->closing_time = 10;
        $lib->save();

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Wed';
        $lib->opening_time = 8;
        $lib->closing_time = 10;
        $lib->save();

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Thu';
        $lib->opening_time = 8;
        $lib->closing_time = 10;
        $lib->save();
        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Fri';
        $lib->opening_time = 8;
        $lib->closing_time = 10;
        $lib->save();

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Sat';
        $lib->opening_time = 8;
        $lib->closing_time = 4;
        $lib->save();

        $lib = new  \App\LibraryDays();
        $lib->library_day = 'Sun';
        $lib->opening_time = 2;
        $lib->closing_time = 10;
        $lib->save();

        $this->call(RoomsSeeder::class);
    }
}
