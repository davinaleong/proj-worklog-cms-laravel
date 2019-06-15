<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\EntryItem;
use Faker\Generator as Faker;

$factory->define(\App\EntryItem::class, function (Faker $faker) {
    return [
        'entry_id' => $faker->randomNumber(3),
        'creator_id' => $faker->randomNumber(3),
        'title_item' => $faker->words(3),
        'code_project' => strtoupper($faker->word),
    ];
});
