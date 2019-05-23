<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
		'mensaje_comentario' => $faker->text($maxNbChars = 255),
		'valoracion' => $faker->numberBetween($min = 0, $max = 5),
		'fecha_comentario' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
