<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Pedido;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Pedido::class, function (Faker $faker) {
=======
$factory->define(App\Pedido::class, function (Faker $faker) {

    $ids_usuarios = \DB::table('usuarios')->select('id')->get();
    $id_usuario = $faker->randomElement($ids_usuarios)->id;

    $ids_despachos = \DB::table('despachos')->select('id')->get();
    $id_despacho = $faker->randomElement($ids_despachos)->id;

    $ids_pagos = \DB::table('pagos')->select('id')->get();
    $id_pago = $faker->randomElement($ids_pagos)->id;


>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'nombre_cliente' => $faker->firstName,
		'apellido_cliente' => $faker->lastName,
		'rut_cliente' => $faker->text($maxNbChars = 15),
		'correo_cliente' => $faker->unique()->safeEmail,
		'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'tipo_entrega' => $faker->boolean,
		'hora_estimada' => $faker->time($format = 'H:i:s', $max = 'now'),
		'estado' => $faker->boolean,
        'id_usuario'=>$id_usuario,
        'id_despacho'=>$id_despacho,
        'id_pago'=>$id_pago
    ];
});
