<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Client::Class, 20)->create();
    }
}
