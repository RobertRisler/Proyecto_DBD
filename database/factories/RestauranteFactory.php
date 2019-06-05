<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Restaurante::class, function (Faker $faker) {

    $ids_calles = \DB::table('calles')->select('id')->get();
    $id_calle = $faker->randomElement($ids_calles)->id;

    return [
		'nombre' => $faker->randomElement(['Pizza Hut','Sushi Ok','Rock & Salsa','Pollo Las Parcelas','Dragón Chino',
        'Tommy Beans','Burger King','Dominó','Tarragona','Soy Churro','Bufalo Beef', 'Mamut', 'Pizzas El Antojito']),
		'descripcion' => $faker->text($maxNbChars = 255),
		'promedio_valoracion' => $faker->numberBetween($min = 0, $max = 5),
		'telefono' => $faker->phoneNumber,
		'hace_despacho' => $faker->boolean,
		'validacion' => $faker->boolean,
        'id_calle' =>$id_calle
    ];
});

