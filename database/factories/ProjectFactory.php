<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title_project' => $faker->words(3),
        'code_project' => strtoupper($faker->word),
    ];
});
