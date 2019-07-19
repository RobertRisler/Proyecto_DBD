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
        
        factory(App\User::class)->create([
            'nombre' => 'Roberto',
            'apellido' => 'Lillo',
            'correo' => 'robertoxlp@hotmail.com',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '2'
        ]);
        
        factory(App\User::class)->create([
            'nombre' => 'Manuel',
            'apellido' => 'Gutierrez',
            'correo' => 'manuel.gutierrez@gmail.com',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '1'
        ]);

        factory(App\User::class)->create([
            'nombre' => 'Hector',
            'apellido' => 'Perez',
            'correo' => 'hector.perez.m@usach.cl',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '3'
        ]);

        factory(App\User::class)->create([
            'nombre' => 'Jose',
            'apellido' => 'Rojas',
            'correo' => 'jose_rojas@hotmail.com',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '3'
        ]);

        factory(App\User::class)->create([
            'nombre' => 'Luis',
            'apellido' => 'Cortés',
            'correo' => 'cortes.luis@hotmail.com',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '3'
        ]);

        factory(App\User::class)->create([
            'nombre' => 'Marcial',
            'apellido' => 'Cuevas',
            'correo' => 'marcialito@hotmail.com',
            'contrasena' => '$2y$10$6wg54QM9pjn25EkcyvaYmO5.bY8E6oaLXdZOnx04KaJ1zUocXINTO',
            'id_tipo_usuario' => '3'
        ]);

		factory('App\User',5)->create();
    }
}
