<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Reserva;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Reserva::class, function (Faker $faker) {
=======
$factory->define(App\Reserva::class, function (Faker $faker) {

    $ids_usuarios = \DB::table('usuarios')->select('id')->get();
    $id_usuario = $faker->randomElement($ids_usuarios)->id;

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'cantidad_personas' => $faker->numberBetween($min = 0, $max = 6),
		'fecha_resevacion' => $faker->dateTimeBetween($format = 'Y-m-d',$min='now', $max = '+1 years'),
		'rut_cliente' => $faker->text($maxNbChars = 15),
		'nombre_cliente' => $faker->firstName,
		'apellido_cliente' => $faker->lastName,
		'estado' => $faker->boolean,
        'id_usuario'=> $id_usuario
    ];
});
