<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'nombre_repartidor' => $faker->text($maxNbChars = 50),
		'rut_repartidor' => $faker->text($maxNbChars = 15),
		'tiempo_estimado' => $faker->time($format = 'H:i:s', $max = 'now'),
		'estado_despacho' => $faker->boolean,
		'tiempo_despachado' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
