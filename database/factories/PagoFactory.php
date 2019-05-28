<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {
    return [
        'tipo'=>$faker->boolean,
        'monto'=>$faker->randomFloat(3, 3000, 100000),
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
