<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->paragraph,
        'due_date' => now(),
        'completed' => $faker->boolean(30),
        'assigned' => false
        //
    ];
});
