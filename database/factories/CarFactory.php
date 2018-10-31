<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    'make' => $faker-> sentence($nbWords = 6, $variableNbWords = true),
    'model' => $faker-> words($nb = 3, $asText = true),
        # ['ford', 'honda', 'toyota']
    'year' => $faker-> year($max = 'now'),
        ];
$faker = factory(App\User::class)->model(['name[]'=>'ford', 'honda', 'toyota']);
});
