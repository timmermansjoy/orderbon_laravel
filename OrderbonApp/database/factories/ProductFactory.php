<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'SKU' => $faker->bs,
        'exact_ref_nr' => $faker->numerify('##########'),
        'unit' => $faker->numberBetween($min = 0, $max = 30),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'stockLocation' => $faker->city,
        'status' => 1
    ];
});
