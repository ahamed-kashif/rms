<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Engineer;
use Faker\Generator as Faker;

$factory->define(Engineer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'nid' => $faker->uuid,
        'address' => $faker->address
    ];
});
