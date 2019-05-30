<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\User::class)->create([
            'nombre'=>'Jose',
            'apellido'=>'Manuel',
            'correo'=>'jose.manuel@usach.cl',
            'contrasena'=>'1234_L',
            'id_tipo_usuario'=>'1'


        ]);

        factory(App\User::class)->create([
            'nombre'=>'Manuel',
            'apellido'=>'Gutierrez',
            'correo'=>'manuel.gutierrez@gmail.com',
            'contrasena'=>'jose_14',
            'id_tipo_usuario'=>'2'


        ]);

        factory(App\User::class)->create([
            'nombre'=>'Fernando',
            'apellido'=>'Muñoz',
            'correo'=>'fernando_9182@gmail.com',
            'contrasena'=>'1234_',
            'id_tipo_usuario'=>'3'


        ]);

        factory(App\User::class)->create([
            'nombre'=>'Jose',
            'apellido'=>'Rojas',
            'correo'=>'jose_rojas@hotmail.com',
            'contrasena'=>'A_12341',
            'id_tipo_usuario'=>'4'


        ]);

        factory(App\User::class)->create([
            'nombre'=>'Luis',
            'apellido'=>'Cortés',
            'correo'=>'cortes.luis@hotmail.com',
            'contrasena'=>'09120',
            'id_tipo_usuario'=>'5'


        ]);
		factory('App\User',30)->create();

    }
}
