<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Comuna::class, function (Faker $faker) {

    $ids_ciudades = \DB::table('ciudades')->select('id')->get();
    $id_ciudad = $faker->randomElement($ids_ciudades)->id;

    return [
        'nombre' =>$faker->city,
        'id_ciudad'=>$id_ciudad
    ];
});
