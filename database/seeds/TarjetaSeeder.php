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
        
        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'1996',
            'numero_cuotas'=>'0',
            'tipo'=>'debito'
        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'1313',
            'numero_cuotas'=>'3',
            'tipo'=>'credito'
        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'1234',
            'numero_cuotas'=>'0',
            'tipo'=>'debito'
        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'9512',
            'numero_cuotas'=>'6',
            'tipo'=>'credito'
        ]);

        factory(App\Tarjeta::class)->create([
            'cuatro_digitos'=>'6666',
            'numero_cuotas'=>'9',
            'tipo'=>'credito'
        ]);
        
        factory('App\Tarjeta',30)->create();
    }
}
