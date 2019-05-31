<?php

use Illuminate\Database\Seeder;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*
        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'',
            'numero_cuotas'=>'',
            'tipo'=>''

        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'',
            'numero_cuotas'=>'',
            'tipo'=>''

        ]);


        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'',
            'numero_cuotas'=>'',
            'tipo'=>''

        ]);


        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'',
            'numero_cuotas'=>'',
            'tipo'=>''

        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'',
            'numero_cuotas'=>'',
            'tipo'=>''

        ]);

        */


        factory('App\Tarjeta',30)->create();
    }
}
