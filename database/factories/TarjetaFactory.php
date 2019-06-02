<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tarjeta::class, function (Faker $faker) {

	$variableTipo = $faker -> randomElement(['credito','debito']);
	if ($variableTipo == 'debito') {
		$variableCuotas = 0;
	}else{
		$variableCuotas = $faker->numberBetween($min='1', $max='48');
	}



    return [

        'cuatro_digitos'=>$faker->numberBetween('1000','9999'),
        'numero_cuotas'=> $variableCuotas,
        'tipo'=> $variableTipo
    ];
});
