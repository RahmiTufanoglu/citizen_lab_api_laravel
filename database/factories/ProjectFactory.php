<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($users),
        'note_id'=> $faker->randomElement($users),
        'title' => $faker->text(50),
        'description' => $faker->text(200),
        'created_at' => now(),
        'updated_at' => now(),
        'is_edited' => false,
    ];
});
