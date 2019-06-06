<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Tipo_usuario;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Tipo_usuario::class, function (Faker $faker) {
=======
$factory->define(App\Tipo_usuario::class, function (Faker $faker) {

    $variable = $faker->unique()->numberBetween(1,3);
    if ($variable == 1)
    {
        $nombre = 'administrador';
    }
    else if ($variable == 2)
    {
        $nombre = 'usuario';
    }
    else
    {
        $nombre = 'restaurante';
    }
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
		'nombre' => $nombre
    ];
});
