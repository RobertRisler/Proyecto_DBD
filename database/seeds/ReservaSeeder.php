<?php

use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Reserva::class)->create([
            'cantidad_personas' => '2',
            'fecha_resevacion' => '2017-07-07',
            'rut_cliente' => '191231239',
            'nombre_cliente' => 'Roberto',
            'apellido_cliente' => 'Lillo',
            'estado' => 'True',
            'id_usuario' => '1',
            'id_horario_mesa' => '2'
        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas' => '6',
            'fecha_resevacion' => '2017-08-07',
            'rut_cliente' => '199651239',
            'nombre_cliente' => 'Armando',
            'apellido_cliente' => 'Casas',
            'estado' => 'True',
            'id_usuario' => '2',
            'id_horario_mesa' => '2'
        ]);
        
        factory(App\Reserva::class)->create([
            'cantidad_personas' => '7',
            'fecha_resevacion' => '2019-09-09',
            'rut_cliente' => '121231231',
            'nombre_cliente' => 'Olga',
            'apellido_cliente' => 'Rodriguez',
            'estado' => 'False',
            'id_usuario' => '1',
            'id_horario_mesa' => '3'
        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas' => '5',
            'fecha_resevacion' => '2018-07-05',
            'rut_cliente' => '47676389',
            'nombre_cliente' => 'Hector',
            'apellido_cliente' => 'Perez',
            'estado' => 'True',
            'id_usuario' => '3',
            'id_horario_mesa' => '1'
        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas' => '1',
            'fecha_resevacion' => '2015-06-01',
            'rut_cliente' => '179809802',
            'nombre_cliente' => 'Rodrigo',
            'apellido_cliente' => 'Hurtado',
            'estado' => 'True',
            'id_usuario' => '4',
            'id_horario_mesa' => '1'
        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas' => '3',
            'fecha_resevacion' => '2019-08-05',
            'rut_cliente' => '65799542',
            'nombre_cliente' => 'Ernesto',
            'apellido_cliente' => 'Lillo',
            'estado' => 'False',
            'id_usuario' => '5',
            'id_horario_mesa' => '2'
        ]);
        
		//factory('App\Reserva',30)->create();
    }
}
