<?php

use Illuminate\Database\Seeder;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
		factory('App\Pago',4)->create();
=======
        factory(App\Pago::class)->create([
            'tipo' => 'efectivo',
            'monto' => '6500',
            'fecha' => '1987-02-04 00:00:00',
            'id_tarjeta' => null
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'tarjeta',
            'monto' => '9600',
            'fecha' => '1999-05-04 00:00:00',
            'id_tarjeta' => '2'
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'tarjeta',
            'monto' => '546900',
            'fecha' => '2015-03-09 00:00:00',
            'id_tarjeta' => '3'
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'efectivo',
            'monto' => '9430',
            'fecha' => '2017-09-06 00:00:00',
            'id_tarjeta' => null
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'tarjeta',
            'monto' => '785110',
            'fecha' => '2018-12-12 00:00:00',
            'id_tarjeta' => '5'
        ]);
        
        factory('App\Pago',30)->create();
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    }
}
