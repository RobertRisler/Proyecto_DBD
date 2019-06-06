<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Historial;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Historial::class, function (Faker $faker) {
    return [
        //
		'actividad' => $faker->text($maxNbChars = 50),
		'descripcion' => $faker->text($maxNbChars = 255),
		'fecha_actividad' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
