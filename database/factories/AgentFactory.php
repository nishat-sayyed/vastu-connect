<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agent;
use Faker\Generator as Faker;

$factory->define(Agent::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'mobile_no' => $faker->phoneNumber,
        'code' => $faker->word,
        'commission' => $faker->numberBetween(1, 25),
        'agentable_id' => 1,
        'agentable_type' => 'App\Admin',
        'password' => bcrypt('password')
    ];
});
