<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Horario_Mesa;
use Faker\Generator as Faker;

$factory->define(Horario_Mesa::class, function (Faker $faker) {

    $ids_mesas = \DB::table('mesas')->select('id')->get();
    $id_mesa = $faker->randomElement($ids_mesas)->id;

    return [
		'hora_inicio' => $faker->time($format = 'H:i:s', $min= '43200',$max = '43200'),
        'hora_fin' => $faker->time($format = 'H:i:s', $max = 'now'),
        'estado_reservacion' => $faker->boolean,
        'id_mesa'=>$id_mesa
    ];
});
