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
        //
        /*
        factory(App\Reserva::class)->create([
            'cantidad_personas'=>'',
            'fecha_resevacion'=>'',
            'rut_cliente'=>'',
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'estado'=>'',
            'id_usuario'=>''

        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas'=>'',
            'fecha_resevacion'=>'',
            'rut_cliente'=>'',
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'estado'=>'',
            'id_usuario'=>''

        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas'=>'',
            'fecha_resevacion'=>'',
            'rut_cliente'=>'',
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'estado'=>'',
            'id_usuario'=>''

        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas'=>'',
            'fecha_resevacion'=>'',
            'rut_cliente'=>'',
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'estado'=>'',
            'id_usuario'=>''

        ]);

        factory(App\Reserva::class)->create([
            'cantidad_personas'=>'',
            'fecha_resevacion'=>'',
            'rut_cliente'=>'',
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'estado'=>'',
            'id_usuario'=>''

        ]);

        */

		factory('App\Reserva',30)->create();
    }
}
