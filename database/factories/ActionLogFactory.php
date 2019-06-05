<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ActionLog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ActionLog::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'log' => $faker->words(5)
    ];
});
