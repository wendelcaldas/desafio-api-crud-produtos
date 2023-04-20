<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'slug' => $faker->slug,
        'price' => $faker->randomFloat(2,0,8),
        'special_price' => $faker->randomFloat(2,0,8),
        'special_price_from' => $faker->date,
        'special_price_to' => $faker->date,
        ];
});
