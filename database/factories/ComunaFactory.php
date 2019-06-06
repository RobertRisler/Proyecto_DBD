<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Model::class, function (Faker $faker) {
    return [
        //
=======
$factory->define(App\Comuna::class, function (Faker $faker) {

    $ids_ciudades = \DB::table('ciudades')->select('id')->get();
    $id_ciudad = $faker->randomElement($ids_ciudades)->id;

    return [
        'nombre' =>$faker->city,
        'id_ciudad'=>$id_ciudad
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    ];
});
