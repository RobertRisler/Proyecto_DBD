<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Menu_Producto::class, function (Faker $faker) {

    $ids_menus = \DB::table('menus')->select('id')->get();
    $id_menu = $faker->randomElement($ids_menus)->id;

    $ids_productos = \DB::table('productos')->select('id')->get();
    $id_producto = $faker->randomElement($ids_productos)->id;

    return [
        'id_menu' => $id_menu,
        'id_producto' => $id_producto
    ];
});
