<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'cantidad_personas' => $faker->numberBetween($min = 0, $max = 3),
		'fecha_reserva' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'rut_cliente' => $faker->text($maxNbChars = 15),
		'nombre_cliente' => $faker->text($maxNbChars = 50),
		'apellido_cliente' => $faker->text($maxNbChars = 50),
		'estado_reserva' => $faker->boolean
    ];
});
