<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Direccion::class, function (Faker $faker) {

    $ids_usuarios = \DB::table('usuarios')->select('id')->get();
    $id_usuario = $faker->randomElement($ids_usuarios)->id;

    $ids_calles = \DB::table('calles')->select('id')->get();
    $id_calle = $faker->randomElement($ids_calles)->id;


    return [
        'alias'=>$faker->streetAddress,
        'id_usuario'=>$id_usuario,
        'id_calle'=>$id_calle
    ];
});
