<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Natabse;
use App\Absence;
use Faker\Generator as Faker;

$factory->define(Absence::class, function (Faker $faker) {
    return [
        'ABS_NUMORD_93' => $faker->randomDigitNot(0),
        'ABS_NAT_9' => $faker->randomDigitNot(0),
        //'ABS_NAT_9' => Natabse::get('CODE_ABS')->random(),
        'ABS_CAT_9' => $faker->randomDigitNot(0),
        'ABS_DATE_DEB' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'ABS_PERDEB_X' => $faker->randomElement($array = array ('A','P')),
        'ABS_DATE_FIN' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'ABS_PERFIN_X' => $faker->randomElement($array = array ('A','P')),
        'ABS_NBRJOUR_93' => $faker->randomDigitNot(0),
        'ABS_CUMULE_9' => $faker->randomDigitNot(0),

        
    ];
});
