<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contact::class, function (Faker\Generator $faker) {
    return [
        'address' => $faker->buildingNumber,
        'address2' => $faker->address,
        'suburb' => $faker->name,
        'city' => $faker->city,
        'region' => $faker->name,
        'postcode' => $faker->postcode,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'phone_landline' => $faker->phoneNumber,
        'phone_mobile' => $faker->phoneNumber,
    ];
});
