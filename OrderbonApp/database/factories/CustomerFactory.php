<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'vatid' => $faker->numerify('BE########'),
        'exactid' => $faker->numerify('##########'),
        'email' => $faker->unique()->companyEmail,
        'ceo_first_name' => $faker->firstName,
        'ceo_last_name' => $faker->lastName,
        'street' => $faker->streetName,
        'city' => $faker->city,
        'country' => $faker->countryCode,
        'phonenumber' => $faker->phoneNumber,
        'postal_code' => $faker->postcode,
        'status' => 1
    ];
});
