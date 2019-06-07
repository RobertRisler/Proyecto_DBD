<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Categoria;
use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Categoria::class, function (Faker $faker) {

    $nombre = $faker->unique()->randomElement(['Desayuno','Almuerzo','Once','Cena', 'Bebestibles']);

    if ($nombre == 'Desayuno')
    {
        $descripcion = 'Una rica y nutritiva comida para comenzar el día';
    }
    else if ($nombre == 'Almuerzo')
    {
        $descripcion = 'Escoge los mejores puntos para disfrutar de un gran almuerzo';
    }
    else if ($nombre == 'Once')
    {
        $descripcion = 'La comida de la tarde';
    }
    else if ($nombre == 'Cena')
    {
        $descripcion = 'Que tu última comida del día sea la mejor';
    }
    else if ($nombre == 'Bebestibles')
    {
        $descripcion = 'Una gran selección de bebestibles para saciar tu sed';
    }

    return [
        'nombre' => $nombre,
		'descripcion' => $descripcion
    ];
});
