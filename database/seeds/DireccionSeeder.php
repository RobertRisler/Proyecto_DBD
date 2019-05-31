<?php

use Illuminate\Database\Seeder;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*

        factory(App\Direccion::class)->create([
            'alias'=>'',
            'id_usuario'=>'',
            'id_calle'=>''

        ]);

        factory(App\Direccion::class)->create([
            'alias'=>'',
            'id_usuario'=>'',
            'id_calle'=>''

        ]);

        factory(App\Direccion::class)->create([
            'alias'=>'',
            'id_usuario'=>'',
            'id_calle'=>''

        ]);

        factory(App\Direccion::class)->create([
            'alias'=>'',
            'id_usuario'=>'',
            'id_calle'=>''

        ]);

        factory(App\Direccion::class)->create([
            'alias'=>'',
            'id_usuario'=>'',
            'id_calle'=>''

        ]);

        */
        factory('App\Direccion',30)->create();
    }
}
