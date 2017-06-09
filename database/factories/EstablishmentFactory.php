<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Establishment::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'address2' => $faker->address,
        'suburb' => $faker->name,
        'postcode' => $faker->postcode,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
    ];
});
