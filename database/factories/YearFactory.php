<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    return [
        'title_year' => $faker->randomNumber(4)
    ];
});
