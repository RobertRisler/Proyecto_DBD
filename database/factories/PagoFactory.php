<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pago::class, function (Faker $faker) {

	$variableTipo = $faker -> randomElement(['efectivo','tarjeta']);
	if ($variableTipo == 'tarjeta') {
		$ids_tarjetas = \DB::table('tarjetas')->select('id')->get();
    	$id_tarjeta = $faker->randomElement($ids_tarjetas)->id;
	}else{
		$id_tarjeta = null;
	}

    return [
        'tipo'=>$variableTipo,
        'monto'=>$faker->randomFloat(3, 3000, 100000),
        'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'id_tarjeta'=>$id_tarjeta

    ];
});
