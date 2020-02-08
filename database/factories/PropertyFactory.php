<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'pincode' => $faker->numberBetween(1000, 9999),
        'sqft' => $faker->numberBetween(100, 1000),
        'price' => $faker->randomFloat,
        'bhk' => $faker->randomDigit,
        'location' => $faker->sentence,
        'sold' => $faker->boolean,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'wing' => $faker->randomAscii,
        'floor' => $faker->randomDigit,
        'room_no' => $faker->randomDigit,
        'status' => $faker->shuffle(['Ready to move', 'Under construction'])[0]
    ];
});
