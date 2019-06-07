<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Menu_Restaurante::class, function (Faker $faker) {
    $ids_menus = \DB::table('menus')->select('id')->get();
    $id_menu = $faker->randomElement($ids_menus)->id;

    $ids_restaurantes = \DB::table('restaurantes')->select('id')->get();
    $id_restaurante = $faker->randomElement($ids_restaurantes)->id;

    return [
        'id_menu' => $id_menu,
        'id_restaurante' => $id_restaurante
    ];
});
