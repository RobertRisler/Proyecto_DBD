<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Horario_Restaurante;
use Faker\Generator as Faker;

$factory->define(Horario_Restaurante::class, function (Faker $faker) {

    $ids_restaurantes = \DB::table('restaurantes')->select('id')->get();
    $id_restaurante = $faker->randomElement($ids_restaurantes)->id;

    return [
        'dia_semana' => $faker->randomElement(['Lunes','Martes','Miércoles','Jueves', 'Viernes', 
        'Sábado', 'Domingo']),
		'hora_apertura' => $faker->time($format = 'H:i:s', $min= '43200',$max = '43200'),
        'hora_cierre' => $faker->time($format = 'H:i:s', $max = 'now'),
        'id_restaurante' => $id_restaurante
    ];
});
