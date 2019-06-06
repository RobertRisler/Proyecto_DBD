<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Categoria;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Categoria::class, function (Faker $faker) {
=======
$factory->define(App\Categoria::class, function (Faker $faker) {
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'nombre' => $faker->randomElement(['Desayuno','Almuerzo','Once','Cena', 'Bebestibles']),
		'descripcion' => $faker->text($maxNbChars = 255)
    ];
});
