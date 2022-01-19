<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Natureagent;
use Faker\Generator as Faker;

$factory->define(Natureagent::class, function (Faker $faker) {
    return [
        'NATAGENT_LIB_X50' => $faker->word
    ];
});
