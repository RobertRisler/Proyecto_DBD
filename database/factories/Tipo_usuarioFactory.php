<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Tipo_usuario;
use App\Model;
use Faker\Generator as Faker;


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

    return [
		'nombre' => $nombre
    ];
});
