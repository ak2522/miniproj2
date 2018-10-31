<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->firstNameMale(),
        'model' => $faker->firstNameCar(),
        'year' => $faker->verifiedyear(),
    ];

    //$faker = factory(App\User::class)->model(['name[]'=>'ford', 'honda', 'toyota']);
});