<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    $brand = ['Audi', 'Opel', 'Mercedes', 'Renault', 'Jeep', 'BMW'];

    return [
        'name' => $brand[$faker->numberBetween(0,count($brand)-1)],
        'color' => $faker->colorName,
        'player_id' => $faker->numberBetween(1,50)
    ];
});
