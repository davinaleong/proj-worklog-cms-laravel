<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\DatabaseLog;
use Faker\Generator as Faker;

$factory->define(DatabaseLog::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'log_db' => $faker->words(5),
        'sources' => json_encode([ [ 'source' => 'Profiles', 'ids' => $faker->randomDigitNotNull ] ]),
        'action' => $faker->randomElement(['O','C','R','U','D','A','T'])
    ];
});
