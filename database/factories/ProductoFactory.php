<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Producto;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Producto::class, function (Faker $faker) {
=======
$factory->define(App\Producto::class, function (Faker $faker) {
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'nombre' => $faker->text($maxNbChars = 50),
		'descripcion' => $faker->text($maxNbChars = 255),
		'precio_total' => $faker->randomFloat(3, 3000, 100000),
		'tipo' => $faker->text($maxNbChars = 50),
		'disponibilidad' => $faker->boolean
    ];
});
