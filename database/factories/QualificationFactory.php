<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Qualification;
use Faker\Generator as Faker;

$factory->define(Qualification::class, function (Faker $faker) {
    return [
        'QUALIF_LIBELLE' => $faker->word,
        'QUALIF_LIB_ARAB' => $faker->word
    ];
});
