<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LogEntry;
use Faker\Generator as Faker;

$factory->define(\App\LogEntry::class, function (Faker $faker) {
    return [
        'log_id' => $faker->randomNumber(3),
        'creator_id' => $faker->randomNumber(3),
        'title_entry' => $faker->words(3),
        'day_type' => strtoupper($faker->randomLetter),
        'date' => $faker-date('Y-m-d H:i:s')
    ];
});
