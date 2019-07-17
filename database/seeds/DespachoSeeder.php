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
        factory(App\Despacho::class)->create([
            'nombre_repartidor' => 'Jose',
            'rut_repartidor' => '198231238',
            'tiempo_estimado' => '1:30:0',
            'estado_despacho' => False,
            'id_calle' => '44',
            'hora_despacho' => '0:0:0'
        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor' => 'Miguel',
            'rut_repartidor' => '178882341',
            'tiempo_estimado' => '0:45:0',
            'estado_despacho' => True,
            'id_calle' => '3',
            'hora_despacho' => '17:53:20'
        ]);
        /*
        factory(App\Despacho::class)->create([
            'nombre_repartidor' => 'Caco',
            'rut_repartidor' => '153882341',
            'tiempo_estimado' => '0:24:0',
            'estado_despacho' => False,
            'id_calle' => '3',
            'hora_despacho' => '0:0:0'
        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor' => 'Nicole',
            'rut_repartidor' => '172182341',
            'tiempo_estimado' => '0:15:0',
            'estado_despacho' => True,
            'id_calle' => '4',
            'hora_despacho' => '0:15:37'
        ]);

        factory(App\Despacho::class)->create([
            'nombre_repartidor' => 'Francisco',
            'rut_repartidor' => '178881241',
            'tiempo_estimado' => '0:35:0',
            'estado_despacho' => False,
            'id_calle' => '5',
            'hora_despacho' => '0:0:0'
        ]);
		factory('App\Despacho',30)->create();
        */
    }
}
