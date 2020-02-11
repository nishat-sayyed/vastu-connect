<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'Nishat',
        'email' => 'admin@admin.com',
        'password' => bcrypt('password')
    ];
});
