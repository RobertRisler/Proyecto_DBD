<?php

use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\Comuna::class)->create([
            'nombre'=>'',
            'id_ciudad'=>''

        ]);

        factory(App\Comuna::class)->create([
            'nombre'=>'',
            'id_ciudad'=>''

        ]);

        factory(App\Comuna::class)->create([
            'nombre'=>'',
            'id_ciudad'=>''

        ]);

        factory(App\Comuna::class)->create([
            'nombre'=>'',
            'id_ciudad'=>''

        ]);

        factory(App\Comuna::class)->create([
            'nombre'=>'',
            'id_ciudad'=>''

        ]);


        factory('App\Comuna',30)->create();
    }
}
