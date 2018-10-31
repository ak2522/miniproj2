<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->firstName(),
        'model' => $faker->firstName(),
        'year' => $faker->date(),
    ];

    //$faker = factory(App\User::class)->model(['name[]'=>'ford', 'honda', 'toyota']);
});