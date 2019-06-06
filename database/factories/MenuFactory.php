<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Menu;
use App\Model;
use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Menu::class, function (Faker $faker) {
=======

$factory->define(App\Menu::class, function (Faker $faker) {

    $ids_categorias = \DB::table('categorias')->select('id')->get();
    $id_categoria = $faker->randomElement($ids_categorias)->id;

>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    return [
        //
		'nombre' => $faker->text($maxNbChars = 50),
		'descripcion' => $faker->text($maxNbChars = 255),
		'cantidad_productos' => $faker->numberBetween($min = 1, $max = 15),
        'id_categoria'=>$id_categoria
    ];
});
