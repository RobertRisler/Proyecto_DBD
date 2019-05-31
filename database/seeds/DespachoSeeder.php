<?php

use Illuminate\Database\Seeder;

class DespachoSeeder extends Seeder
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
        factory(App\Despacho::class)->create([
            'nombre_repartidor'=>'Jose',
            'rut_repartidor'=>'198231238',
            'tiempo_estimado'=>'',
            'estado_despacho'=>'',
            'hora_despacho'=>''

        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor'=>'Miguel',
            'rut_repartidor'=>'178882341',
            'tiempo_estimado'=>'',
            'estado_despacho'=>'',
            'hora_despacho'=>''

        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor'=>'Caco',
            'rut_repartidor'=>'153882341',
            'tiempo_estimado'=>'',
            'estado_despacho'=>'',
            'hora_despacho'=>''

        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor'=>'Martin',
            'rut_repartidor'=>'172182341',
            'tiempo_estimado'=>'',
            'estado_despacho'=>'',
            'hora_despacho'=>''

        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor'=>'Francisco',
            'rut_repartidor'=>'178881241',
            'tiempo_estimado'=>'',
            'estado_despacho'=>'',
            'hora_despacho'=>''

        ]);

        */
		factory('App\Despacho',30)->create();
    }
}
