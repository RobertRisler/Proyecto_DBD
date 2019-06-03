<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $ids_tipos_usuarios = \DB::table('tipo_usuarios')->select('id')->get();
    $id_tipo_usuario = $faker->randomElement($ids_tipos_usuarios)->id;





    return [
		'nombre' => $faker->firstName,
		'apellido' => $faker->lastName,
		'correo' => $faker->unique()->safeEmail,
		'contrasena' => $password = bcrypt('secret'),
        'id_tipo_usuario' =>  $id_tipo_usuario

    ];
});
