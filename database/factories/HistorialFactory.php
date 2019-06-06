<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Historial;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Historial::class, function (Faker $faker) {
=======
$factory->define(App\Historial::class, function (Faker $faker) {

    $ids_usuarios = \DB::table('usuarios')->select('id')->get();
    $id_usuario = $faker->randomElement($ids_usuarios)->id;

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'actividad' => $faker->text($maxNbChars = 50),
		'descripcion' => $faker->text($maxNbChars = 255),
		'fecha_actividad' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'id_usuario'=>$id_usuario
    ];
});
