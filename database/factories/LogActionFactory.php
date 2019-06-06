<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\LogAction;
use Faker\Generator as Faker;

$factory->define(LogAction::class, function (Faker $faker) {
    return [
        'title_action' => $faker->word,
        'code_action' => $faker->randomLetter
    ];
});
