<?php

use Faker\Generator as Faker;

$factory->define(App\Kategorija::class, function (Faker $faker) {
    return [
        'naziv' => $faker->text(50),
        'slug' => $faker->text(8)
    ];
});
