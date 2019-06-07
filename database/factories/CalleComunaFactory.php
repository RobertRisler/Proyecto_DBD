<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Calle_Comuna::class, function (Faker $faker) {
    $ids_calles = \DB::table('calles')->select('id')->get();
    $id_calle= $faker->randomElement($ids_calles)->id;

    $ids_comunas = \DB::table('comunas')->select('id')->get();
    $id_comuna = $faker->randomElement($ids_comunas)->id;

    return [
        'id_calle' => $id_calle,
        'id_comuna' => $id_comuna
    ];
});
