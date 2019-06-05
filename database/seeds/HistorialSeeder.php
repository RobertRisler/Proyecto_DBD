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
        factory(App\Historial::class)->create([
            'actividad' => 'Compra',
            'descripcion' => 'Compró en Domino',
            'fecha_actividad' => '2019-02-01',
            'id_usuario' => '2'
        ]);
        
        factory(App\Historial::class)->create([
            'actividad' => 'Agregar',
            'descripcion' => 'Se agregó un nuevo restaurante',
            'fecha_actividad' => '2018-05-08',
            'id_usuario' => '1'
        ]);

        factory(App\Historial::class)->create([
            'actividad' => 'Compra',
            'descripcion' => 'Compró en PizzaHut',
            'fecha_actividad' => '2016-06-06',
            'id_usuario' => '3'
        ]);

        factory(App\Historial::class)->create([
            'actividad' => 'Modificar',
            'descripcion' => 'Modificó precio artículo',
            'fecha_actividad' => '2018-08-08',
            'id_usuario' => '4'
        ]);

        factory(App\Historial::class)->create([
            'actividad' => 'Modificar',
            'descripcion' => 'Modificó horario apertura',
            'fecha_actividad' => '2019-03-09',
            'id_usuario' => '5'
        ]);
        
		factory('App\Historial',30)->create();
    }
}
