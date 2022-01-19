<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Qualification;
use App\Natureagent;
use App\Personnel;
use Faker\Generator as Faker;

$factory->define(Personnel::class, function (Faker $faker) {
    return [
        'PERS_MAT_ACT' => $faker->randomDigitNot(0),
        'PERS_NOM' => $faker->word,
        'PERS_PRENOM' => $faker->lastname,
        'PERS_DATE_NAIS' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'PERS_SEX_X' => $faker->randomElement($array = array ('H','F')),
        'PERS_CODE_QUALIF' => $faker->randomDigitNot(0),
        //'PERS_CODE_QUALIF' => Qualification::get('QUALIF_CODE')->random(),
        'PERS_NATURAGENT_93' => $faker->randomDigitNot(0)
        //'PERS_NATURAGENT_93' => Natureagent::get('NATAGENT_CODE_93')->random()
    ];
});
