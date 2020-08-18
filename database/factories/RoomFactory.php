<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name'=>$faker->city,
        'description'=>$faker->text($maxNbChars = 20),
        'pax'=>$faker->numberBetween($min=2, $max=4)
    ];
});
