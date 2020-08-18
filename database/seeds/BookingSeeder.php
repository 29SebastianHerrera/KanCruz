<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Booking::create([
            'name' => 'Bruna',
            'lastname' => 'Gomes',
            'document' => 'yc03940e',
            'email' => 'sergi@gmail.com',
            'phone' => '943849302',
            'checkin' => '2020/05/30',
            'checkout' => '2020/05/30',
            'breakfast'=> '0',
            'pets'=> '0',
            'room_id' => '1'
        ]);

        App\Booking::create([
            'name' => 'Sergi',
            'lastname' => 'Oliveres',
            'document' => 'yc03940e',
            'email' => 'sergi@gmail.com',
            'phone' => '943849302',
            'checkin' => '2020/05/10',
            'checkout' => '2020/05/15',
            'breakfast'=> '0',
            'pets'=> '0',
            'room_id' => '2'
        ]);

        App\Booking::create([
            'name' => 'Alejandro',
            'lastname' => 'Acho',
            'document' => 'yc03940e',
            'email' => 'alejandro@gmail.com',
            'phone' => '943849302',
            'checkin' => '2020/05/20',
            'checkout' => '2020/05/18',
            'breakfast'=> '0',
            'pets'=> '0',
            'room_id' => '3'
        ]);

        App\Booking::create([
            'name' => 'Sebastian',
            'lastname' => 'Herrera',
            'document' => 'yc03940e',
            'email' => 'sebastian@gmail.com',
            'phone' => '943849302',
            'checkin' => '2020/05/22',
            'checkout' => '2020/05/24',
            'breakfast'=> '0',
            'pets'=> '0',
            'room_id' => '1'
        ]);

    }
}
