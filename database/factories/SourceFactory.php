<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Source;
use Faker\Generator as Faker;

$factory->define(Source::class, function (Faker $faker) {
    return [
        'title_source' => $faker->words(3),
        'group' => $faker->randomElement(['Admin', 'Data-source', 'Work Log', 'Others']),
    ];
});
