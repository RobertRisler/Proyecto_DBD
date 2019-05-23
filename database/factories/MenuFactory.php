<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'nombre_menu' => $faker->text($maxNbChars = 50),
		'descripcion_menu' => $faker->text($maxNbChars = 255),
		'cantidad_productos' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
