<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' => $faker->country,
        'zip_code' => $faker->postcode,
        //'person_id' => $faker->unique()->numberBetween(1,50)
    ];
});
