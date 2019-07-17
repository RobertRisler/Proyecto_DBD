<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Mesa;
use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Mesa::class, function (Faker $faker) {



    $ids_restaurantes = \DB::table('restaurantes')->select('id')->get();
    $id_restaurante = $faker->randomElement($ids_restaurantes)->id;


    return [
		'cantidad_asientos' => $faker->numberBetween($min = 1, $max = 10),
        'id_restaurante'=>$id_restaurante
    ];
});
