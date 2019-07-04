<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LogEntry;
use Faker\Generator as Faker;

$factory->define(\App\LogEntry::class, function (Faker $faker) {
    return [
        'log_id' => $faker->randomNumber(3),
        'user_id' => 1,
        'title_entry' => ucfirst($faker->words(3, true)),
        'code_type' => $faker->randomElement(['W', 'A', 'P', 'M', 'C', 'B']),
        'date' => $faker->date('Y-m-d H:i:s')
    ];
});
