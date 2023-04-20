<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryProducts;
use Faker\Generator as Faker;

$factory->define(CategoryProducts::class, function (Faker $faker) {
    return [
        //
        'category_id' => $faker->numberBetween(1,10),
        'product_id' => $faker->unique()->numberBetween(1,10),
    ];
});
