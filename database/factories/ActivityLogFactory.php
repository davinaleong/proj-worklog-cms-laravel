<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ActivityLog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ActivityLog::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'log' => $faker->words(5)
    ];
});
