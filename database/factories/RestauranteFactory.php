<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'nombre_restaurante' => $faker->text($maxNbChars = 50),
		'descripcion_rest' => $faker->text($maxNbChars = 255),
		'hora_apertura' => $faker->time($format = 'H:i:s', $max = 'now'),
		'hora_cierre' => $faker->time($format = 'H:i:s', $max = 'now'),
		'promedio_valoracion' => $faker->numberBetween($min = 0, $max = 5),
		'telefono_restaurante' => $faker->phoneNumber,
		'hace_despacho' => $faker->boolean,
		'validacion' => $faker->boolean
    ];
});
