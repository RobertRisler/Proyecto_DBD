<?php

use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
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

        factory(App\Restaurante::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'hora_apertura'=>'',
            'hora_cierre'=>'',
            'promedio_valoracion'=>'',
            'telefono'=>'',
            'hace_despacho'=>'',
            'validacion'=>'',
            'id_calle'=>''

        ]);

        factory(App\Restaurante::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'hora_apertura'=>'',
            'hora_cierre'=>'',
            'promedio_valoracion'=>'',
            'telefono'=>'',
            'hace_despacho'=>'',
            'validacion'=>'',
            'id_calle'=>''

        ]);

        factory(App\Restaurante::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'hora_apertura'=>'',
            'hora_cierre'=>'',
            'promedio_valoracion'=>'',
            'telefono'=>'',
            'hace_despacho'=>'',
            'validacion'=>'',
            'id_calle'=>''

        ]);

        factory(App\Restaurante::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'hora_apertura'=>'',
            'hora_cierre'=>'',
            'promedio_valoracion'=>'',
            'telefono'=>'',
            'hace_despacho'=>'',
            'validacion'=>'',
            'id_calle'=>''

        ]);

        factory(App\Restaurante::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'hora_apertura'=>'',
            'hora_cierre'=>'',
            'promedio_valoracion'=>'',
            'telefono'=>'',
            'hace_despacho'=>'',
            'validacion'=>'',
            'id_calle'=>''

        ]);

        */

		factory('App\Restaurante',30)->create();
    }
}
