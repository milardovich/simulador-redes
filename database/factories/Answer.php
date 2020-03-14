<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'answer' => $faker->sentence().'?',
        'question_id' => $faker->numberBetween(1,6),
        'correct' => $faker->boolean()
    ];
});
