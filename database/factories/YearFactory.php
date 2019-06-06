<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    return [
        'year_title' => $faker->randomNumber(4)
    ];
});
