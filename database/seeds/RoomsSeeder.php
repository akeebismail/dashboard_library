<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = new \App\Rooms;
        $rooms->name = 'Room A';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();


        $rooms = new \App\Rooms;
        $rooms->name = 'Room B';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();


        $rooms = new \App\Rooms;
        $rooms->name = 'Room C';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();


        $rooms = new \App\Rooms;
        $rooms->name = 'Room D';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();


        $rooms = new \App\Rooms;
        $rooms->name = 'Room E';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();


        $rooms = new \App\Rooms;
        $rooms->name = 'Room F';
        $rooms->user_id =1;
        $rooms->number_of_seats = 500;
        $rooms->status = 1;
        $rooms->save();
    }
}
