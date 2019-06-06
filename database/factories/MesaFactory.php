<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Mesa;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Mesa::class, function (Faker $faker) {
=======
$factory->define(App\Mesa::class, function (Faker $faker) {

    $ids_reservas = \DB::table('reservas')->select('id')->get();
    $id_reserva = $faker->randomElement($ids_reservas)->id;

    $ids_restaurantes = \DB::table('restaurantes')->select('id')->get();
    $id_restaurante = $faker->randomElement($ids_restaurantes)->id;

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
		'cantidad_asientos' => $faker->numberBetween($min = 1, $max = 10),
        'id_reserva'=>$id_reserva,
        'id_restaurante'=>$id_restaurante
    ];
});
