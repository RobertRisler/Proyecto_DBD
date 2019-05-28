<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        //
		'nombre' => $faker->randomElement(['Desayuno','Almuerzo','Once','Cena', 'Bebestibles']),
		'descripcion' => $faker->text($maxNbChars = 255)
    ];
});
