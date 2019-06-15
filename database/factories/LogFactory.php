<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
        'creator_id ' => $faker->randomNumber(3),
        'title_log' => $faker->words(3),
        'company_code' => strtoupper($faker->word),
        'year_id' => $faker->randomNumber(3),
        'remarks' => $faker->words(3),
        'published' => true
    ];
});
