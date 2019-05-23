<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'nombre_producto' => $faker->text($maxNbChars = 50),
		'descripcion_producto' => $faker->text($maxNbChars = 255),
		'precio_total' => $faker->numberBetween(100000,3000000),
		'tipo_producto' => $faker->text($maxNbChars = 50),
		'disponibilidad_producto' => $faker->boolean
    ];
});
