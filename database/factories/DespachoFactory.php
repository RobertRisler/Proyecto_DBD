<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Despacho;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Despacho::class, function (Faker $faker) {

    return [
        //tiempo estimado 3600 is 1 hr (maximo que demora en entregar pedido)
		'nombre_repartidor' => $faker->firstName,
		'rut_repartidor' => $faker->numberBetween($min = 1000000, $max = 22000000),
		'tiempo_estimado' => $faker->time($format = 'H:i:s', $max = '3600'),
		'estado_despacho' => $faker->boolean,
		'hora_despacho' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
