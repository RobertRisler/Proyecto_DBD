<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {

	$variableTipo = $faker -> randomElement(['efectivo','tarjeta']);
	if ($variableTipo == 'tarjeta') {
		// agregar id tarjeta
	}else{
		// no agregar
	}

    return [
        'tipo'=>$variableTipo,
        'monto'=>$faker->randomFloat(3, 3000, 100000),
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
