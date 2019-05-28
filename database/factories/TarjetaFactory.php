<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tarjeta::class, function (Faker $faker) {
    return [
        'cuatro_digitos'=>$faker->numberBetween('1000','9999'),
        'numero_cuotas'=>$faker->numberBetween($min='1', $max='36'),
        'tipo'=> $faker->creditCardType
    ];
});
