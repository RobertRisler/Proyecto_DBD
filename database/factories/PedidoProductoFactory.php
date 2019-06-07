<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pedido_Producto::class, function (Faker $faker) {
    $ids_pedidos = \DB::table('pedidos')->select('id')->get();
    $id_pedido = $faker->randomElement($ids_pedidos)->id;

    $ids_productos = \DB::table('productos')->select('id')->get();
    $id_producto = $faker->randomElement($ids_productos)->id;

    return [
        'id_pedido' => $id_pedido,
        'id_producto' => $id_producto
    ];
});
