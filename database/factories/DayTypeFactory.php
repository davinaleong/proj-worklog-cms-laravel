<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\DayType;
use Faker\Generator as Faker;

$factory->define(DayType::class, function (Faker $faker) {
    return [
        'title_type' => $faker->words(),
        'code_type' => $faker->word(),
        'icon_fa' => 'fas fa-fw fa-flag',
        'color_hex' => '#000000'
    ];
});
