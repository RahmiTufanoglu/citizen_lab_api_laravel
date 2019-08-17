<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $projects = App\Project::pluck('id')->toArray();
    return [
        'project_id' => $faker->randomElement($projects),
        'type' => 'text',
        'title' => $faker->text(50),
        'description' => $faker->text(200),
        'file_path' => '',
        'created_at' => now(),
        'updated_at' => now(),
        'is_edited' => false,
    
    ];
});
