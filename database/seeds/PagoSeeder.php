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
        factory(App\Pago::class)->create([
            'tipo' => 'efectivo',
            'monto' => '6500',
            'fecha' => '2018-06-03 00:00:00',
            'id_tarjeta' => null
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'tarjeta',
            'monto' => '9900',
            'fecha' => '2019-10-11 00:00:00',
            'id_tarjeta' => '1'
        ]);

        factory(App\Pago::class)->create([
            'tipo' => 'tarjeta',
            'monto' => '2500',
            'fecha' => '2008-12-07 17:00:00',
            'id_tarjeta' => '2'
        ]);
        /*
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
        */
        //factory('App\Pago',30)->create();
    }
}
