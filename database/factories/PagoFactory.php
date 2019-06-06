<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Pago;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Pago::class, function (Faker $faker) {
    return [
        //
		'tipo_pago' => $faker->numberBetween($min = 0, $max = 2),
		'monto_pago' => $faker->numberBetween($min = 1000, $max = 100000),
		'fecha_pago' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
