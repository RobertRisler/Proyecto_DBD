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
        /*
        factory(App\Pago::class)->create([
            'tipo' => '',
            'monto' => '',
            'fecha' => ''
        ]);

        factory(App\Pago::class)->create([
            'tipo' => '',
            'monto' => '',
            'fecha' => ''
        ]);

        factory(App\Pago::class)->create([
            'tipo' => '',
            'monto' => '',
            'fecha' => ''
        ]);

        factory(App\Pago::class)->create([
            'tipo' => '',
            'monto' => '',
            'fecha' => ''
        ]);

        factory(App\Pago::class)->create([
            'tipo' => '',
            'monto' => '',
            'fecha' => ''
        ]);
        */
        factory('App\Pago',30)->create();
    }
}
