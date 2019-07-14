<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
//        'user_id ' => 1,
        'title_log' => ucfirst($faker->words(3, true)),
        'code_company' => 'TPA',
        'year_id' => 5,
        'remarks' => ucfirst($faker->words(10, true)),
        'published' => true
    ];
});
