<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create(['name'=>'Alejandro Acho','email'=>'alejo@acho.com']);

        $this->call(TagSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
