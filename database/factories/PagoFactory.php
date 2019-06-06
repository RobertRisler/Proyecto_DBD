<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
<<<<<<< HEAD
use App\Pago;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Pago::class, function (Faker $faker) {
    return [
        //
		'tipo_pago' => $faker->numberBetween($min = 0, $max = 2),
		'monto_pago' => $faker->numberBetween($min = 1000, $max = 100000),
		'fecha_pago' => $faker->date($format = 'Y-m-d', $max = 'now')
=======

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
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    ];
});
