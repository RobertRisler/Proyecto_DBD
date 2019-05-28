<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Calle::class, function (Faker $faker) {
    return [


        'nombre' => $faker->streetName,
        'numero' => $faker->numberBetween(10,900),



    ];
});
