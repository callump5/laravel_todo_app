<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {
    return [
        'project_id' => factory(App\Project::class),
        'item' => $faker->name,
        'description' => $faker->paragraph,
        'completed' => $faker->boolean(30)
        //
    ];
});
