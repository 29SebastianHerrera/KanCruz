<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name'=>$faker->jobTitle,
        'description'=>$faker->text($maxNbChars=20),
        'price'=>$faker->randomFloat($nbMaxDecimals=2,$min=5,$max=25)
    ];
});
