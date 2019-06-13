<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'title_company' => $faker->words(3),
        'code_company' => $faker->word(),
        'period_started_on' => now(),
        'period_ended_on' => now()
    ];
});
