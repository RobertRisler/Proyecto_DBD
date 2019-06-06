<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comentario;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Comentario::class, function (Faker $faker) {
=======
$factory->define(App\Comentario::class, function (Faker $faker) {

    $ids_usuarios = \DB::table('usuarios')->select('id')->get();
    $id_usuario = $faker->randomElement($ids_usuarios)->id;

    $ids_restaurantes = \DB::table('restaurantes')->select('id')->get();
    $id_restaurante = $faker->randomElement($ids_restaurantes)->id;

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'mensaje' => $faker->text($maxNbChars = 255),
		'valoracion' => $faker->numberBetween($min = 0, $max = 5),
		'fecha' => $faker->date($format = 'Y-m-d',$min='2061067200', $max = 'now'),
        'id_usuario'=>$id_usuario,
        'id_restaurante'=>$id_restaurante
    ];
});
