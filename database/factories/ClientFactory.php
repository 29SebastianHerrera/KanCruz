<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstNameMale,
        'phone'=>$faker->e164PhoneNumber,
        'email'=>$faker->email
    ];
});
