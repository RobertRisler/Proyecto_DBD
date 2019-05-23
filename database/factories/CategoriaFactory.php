<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'nombre_categoria' => $faker->text($maxNbChars = 50),
		'descripcion_cat' => $faker->text($maxNbChars = 255)
    ];
});
