<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'phone' => $faker->userName,
        'email' => $faker->userName,
        'nid' => $faker->userName,
        'address' => $faker->userName,
        'material' => $faker->userName
    ];
});
