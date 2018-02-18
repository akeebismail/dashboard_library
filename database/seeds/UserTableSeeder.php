<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User();
        $user->username = 'peace';
        $user->first_name = 'John';
        $user->last_name = 'Doe';
        $user->password = bcrypt('qwerty');
        $user->status =1;
        $user->level    = 1;
        $user->room_id = 0;
        $user->save();
    }
}
