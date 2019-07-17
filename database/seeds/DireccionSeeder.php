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
            'id_calle' => '3'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'House',
            'id_usuario' => '2',
            'id_calle' => '4'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '3',
            'id_calle' => '5'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Mi casa',
            'id_usuario' => '3',
            'id_calle' => '6'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Casa La Reina',
            'id_usuario' => '4',
            'id_calle' => '7'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Casita',
            'id_usuario' => '5',
            'id_calle' => '8'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'House',
            'id_usuario' => '6',
            'id_calle' => '9'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '7',
            'id_calle' => '10'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'House',
            'id_usuario' => '8',
            'id_calle' => '11'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '9',
            'id_calle' => '12'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '10',
            'id_calle' => '13'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '1',
            'id_calle' => '14'
        ]);

        factory(App\Direccion::class)->create([
            'alias' => 'Depa',
            'id_usuario' => '2',
            'id_calle' => '15'
        ]);
        
        //factory('App\Direccion',30)->create();
    }
}
