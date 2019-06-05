<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LogAction;
use Faker\Generator as Faker;

$factory->define(LogAction::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'action_code' => $faker->randomLetter
    ];
});
