<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clients;
use Faker\Generator as Faker;

$factory->define(Clients::class, function (Faker $faker) {
    return [
        'propertyname' => $faker->city,
        'groupname' => $faker->name,
    ];
});
