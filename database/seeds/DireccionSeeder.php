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
        factory(App\Direccion::class)->create([
            'alias' => 'Casa Temuco',
            'id_usuario' => '1',
            'id_calle' => '3'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Casa La Reina',
            'id_usuario' => '1',
            'id_calle' => '5'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Casita',
            'id_usuario' => '2',
            'id_calle' => '1'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'House',
            'id_usuario' => '3',
            'id_calle' => '2'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '4',
            'id_calle' => '4'
        ]);
        
        factory('App\Direccion',30)->create();
    }
}
