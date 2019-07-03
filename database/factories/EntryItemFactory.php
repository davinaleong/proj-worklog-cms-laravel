<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\EntryItem;
use Faker\Generator as Faker;

$factory->define(\App\EntryItem::class, function (Faker $faker) {
    return [
        'entry_id' => $faker->randomNumber(3),
        'user_id' => 1,
        'title_item' => $faker->words(3, true),
        'code_project' => $faker->randomElement(['KLICK', 'SSO', 'PROJ', 'POC', 'LEARN']),
    ];
});
