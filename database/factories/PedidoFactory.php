<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Pedido;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        //
		'nombre_cliente' => $faker->text($maxNbChars = 50),
		'apellido_cliente' => $faker->text($maxNbChars = 50),
		'rut_cliente' => $faker->text($maxNbChars = 15),
		'correo_cliente' => $faker->unique()->safeEmail,
		'fecha_pedido' => $faker->date($format = 'Y-m-d', $max = 'now'),
		'tipo_entrega' => $faker->numberBetween($min = 0, $max = 3),
		'hora_estimada' => $faker->time($format = 'H:i:s', $max = 'now'),
		'estado_pedido' => $faker->boolean
    ];
});
