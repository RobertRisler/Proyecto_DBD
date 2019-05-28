<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tipo_usuario::class, function (Faker $faker) {
    return [
        //
		'nombre' => $faker -> randomElement(['administrador','usuario','restaurante'])
    ];
});
