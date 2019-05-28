<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        //
		'nombre' => $faker->text($maxNbChars = 50),
		'descripcion' => $faker->text($maxNbChars = 255),
		'precio_total' => $faker->randomFloat(3, 3000, 100000),
		'tipo' => $faker->text($maxNbChars = 50),
		'disponibilidad' => $faker->boolean
    ];
});
