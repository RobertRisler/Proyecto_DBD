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
            'nombre' => 'Temuco',
            'id_ciudad' => '2'
        ]);
        
        factory(App\Comuna::class)->create([
            'nombre' => 'La Reina',
            'id_ciudad' => '3'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Providencia',
            'id_ciudad' => '3'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Estación Central',
            'id_ciudad' => '3'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Lautaro',
            'id_ciudad' => '2'
        ]);
        
        factory('App\Comuna',30)->create();

    }
}
