<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Investor;
use Faker\Generator as Faker;

$factory->define(Investor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'nid' => $faker->uuid,
        'address' => $faker->address
    ];
});
