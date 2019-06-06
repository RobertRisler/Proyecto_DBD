<?php

use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comentario::class)->create([
            'mensaje' => 'Un gran lugar, agradable ambiente.',
            'valoracion' => '5',
            'fecha' => '2019-02-01',
            'id_usuario' => '2',
            'id_restaurante' => '2'
        ]);

        factory(App\Comentario::class)->create([
            'mensaje' => 'Pesimo lugar, no lo recomiendo.',
            'valoracion' => '1',
            'fecha' => '2019-03-02',
            'id_usuario' => '2',
            'id_restaurante' => '1'
        ]);

        factory(App\Comentario::class)->create([
            'mensaje' => 'Encontré un pelo en mi plato, nunca vayan.',
            'valoracion' => '1',
            'fecha' => '2018-02-01',
            'id_usuario' => '3',
            'id_restaurante' => '1'
        ]);

        factory(App\Comentario::class)->create([
            'mensaje' => 'La mesa no se encontraba en buenas condiciones, pesimo servicio.',
            'valoracion' => '2',
            'fecha' => '2017-02-04',
            'id_usuario' => '5',
            'id_restaurante' => '5'
        ]);

        factory(App\Comentario::class)->create([
            'mensaje' => 'Excelente ubicacion, me gusto el ambiente.',
            'valoracion' => '4',
            'fecha' => '2019-02-03',
            'id_usuario' => '3',
            'id_restaurante' => '4'
        ]);
        
		factory('App\Comentario',30)->create();
    }
}
