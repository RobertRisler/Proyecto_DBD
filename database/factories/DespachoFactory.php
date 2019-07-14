<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Despacho;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Despacho::class, function (Faker $faker) {

	$ids_calles = \DB::table('calles')->select('id')->get();
    $id_calle = $faker->randomElement($ids_calles)->id;

    return [
        //tiempo estimado 3600 is 1 hr (maximo que demora en entregar pedido)
		'nombre_repartidor' => $faker->firstName,
		'rut_repartidor' => $faker->numberBetween($min = 1000000, $max = 22000000),
		'tiempo_estimado' => $faker->time($format = 'H:i:s', $max = '3600'),
		'estado_despacho' => $faker->boolean,
		'id_calle'=>$id_calle,
		'hora_despacho' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
