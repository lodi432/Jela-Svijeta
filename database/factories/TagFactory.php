<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'naziv' => $faker->text(50),
        'slug' => $faker->text(8)
    ];
});
