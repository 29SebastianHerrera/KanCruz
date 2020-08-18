<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Room::class,3)->create();
    }
}
