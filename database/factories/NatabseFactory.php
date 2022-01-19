<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Natabse;
use Faker\Generator as Faker;

$factory->define(Natabse::class, function (Faker $faker) {
    return [
        'LIBELLE_ABS' => $faker->word,
        'TYPE_ABS' => $faker->text($maxNbChars = 10),
        'TYPE_ABS_PR' => $faker->randomDigit,
        'TYPE_ABS_13' => $faker->randomDigit,
        'TYPE_ABS_PROD' => $faker->randomDigit,
        'TYPE_ABS_CNR' => $faker->randomDigit
    ];
});
