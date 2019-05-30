<?php

use Illuminate\Database\Seeder;

class HistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Historial::class)->create([
            'actividad'=>'',
            'descripcion'=>'',
            'fecha_actividad'=>'',
            'id_usuario'=>'1'

        ]);

        factory(App\Historial::class)->create([
            'actividad'=>'',
            'descripcion'=>'',
            'fecha_actividad'=>'',
            'id_usuario'=>'3'

        ]);

        factory(App\Historial::class)->create([
            'actividad'=>'',
            'descripcion'=>'',
            'fecha_actividad'=>'',
            'id_usuario'=>'2'

        ]);

        factory(App\Historial::class)->create([
            'actividad'=>'',
            'descripcion'=>'',
            'fecha_actividad'=>'',
            'id_usuario'=>'1'

        ]);

        factory(App\Historial::class)->create([
            'actividad'=>'',
            'descripcion'=>'',
            'fecha_actividad'=>'',
            'id_usuario'=>'2'

        ]);

		factory('App\Historial',30)->create();
    }
}
