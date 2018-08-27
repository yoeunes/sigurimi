<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->sentence,
        'description' => $faker->paragraph,
        'price'       => $faker->numberBetween(100, 100000),
        'stock'       => $faker->numberBetween(0, 1000),
    ];
});
