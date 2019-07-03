<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
        'user_id ' => 1,
        'title_log' => $faker->words(3, true),
        'company_code' => 'TPA',
        'year_id' => 5,
        'remarks' => $faker->words(10, true),
        'published' => true
    ];
});
