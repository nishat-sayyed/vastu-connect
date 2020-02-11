<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'code' => $faker->word,
        'mobile_no' => $faker->phoneNumber,
        'password' => bcrypt('password')
    ];
});
