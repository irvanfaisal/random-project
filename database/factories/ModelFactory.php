<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Answer::class, function (Faker\Generator $faker) {
    return [
        'answer' => $faker->unique()->sentence,
        'category' => $faker->randomElement($array = array('Lulus', 'Kerja', 'Nikah')),
    ];
});

$factory->define(App\Lulus::class, function (Faker\Generator $faker) {
    return [
        'answer' => $faker->unique()->sentence,
    ];
});

$factory->define(App\Kerja::class, function (Faker\Generator $faker) {
    return [
        'answer' => $faker->unique()->sentence,
    ];
});

$factory->define(App\Nikah::class, function (Faker\Generator $faker) {
    return [
        'answer' => $faker->unique()->sentence,
    ];
});