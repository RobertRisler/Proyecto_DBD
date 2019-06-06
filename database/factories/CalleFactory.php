<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Model::class, function (Faker $faker) {
    return [
        //
=======
$factory->define(App\Calle::class, function (Faker $faker) {
    return [
        'nombre' => $faker->streetName,
        'numero' => $faker->numberBetween(10,900)
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    ];
});
