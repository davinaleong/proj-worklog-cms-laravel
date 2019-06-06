<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'company_title' => $faker->words(3),
        'company_code' => $faker->word(),
        'period_started_on' => now(),
        'period_ended_on' => now()
    ];
});
