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


        /*
        //

        factory(App\Comentario::class)->create([
            'mensaje'=>'Un gran lugar, agradable ambiente.',
            'valoracion'=>5,
            'fecha'=>'14-02-19',
            'id_usuario'=>'2',
            'id_restaurante'=>'2'

        ]);

        factory(App\Comentario::class)->create([
            'mensaje'=>'Pesimo lugar, no lo recomiendo.',
            'valoracion'=>2,
            'fecha'=>'01-04-19',
            'id_usuario'=>'2',
            'id_restaurante'=>'1'


        ]);

        factory(App\Comentario::class)->create([
            'mensaje'=>'Encontré un pelo en mi plato, nunca vayan.',
            'valoracion'=>1,
            'fecha'=>'12-02-19',
            'id_usuario'=>'3',
            'id_restaurante'=>'1'


        ]);

        factory(App\Comentario::class)->create([
            'mensaje'=>'La mesa no se encontraba en buenas condiciones, pesimo servicio.',
            'valoracion'=>2,
            'fecha'=>'14-03-19',
            'id_usuario'=>'5',
            'id_restaurante'=>'5'


        ]);

        factory(App\Comentario::class)->create([
            'mensaje'=>'Excelente ubicacion, me gusto el ambiente.',
            'valoracion'=>4,
            'fecha'=>'14-05-19',
            'id_usuario'=>'3',
            'id_restaurante'=>'4'


        ]);

        */

		factory('App\Comentario',30)->create();
    }
}
