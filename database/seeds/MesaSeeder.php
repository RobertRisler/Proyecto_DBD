<?php

use Illuminate\Database\Seeder;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '4',
            'id_restaurante' => '1'
        ]);
        
        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '6',
            'id_restaurante' => '2'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'8',
            'id_restaurante'=>'3'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '6',
            'id_restaurante' => '4'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '4',
            'id_restaurante' => '5'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '4',
            'id_restaurante' => '6'
        ]);
        
        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '4',
            'id_restaurante' => '7'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos'=>'8',
            'id_restaurante'=>'8'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '2',
            'id_restaurante' => '9'
        ]);

        factory(App\Mesa::class)->create([
            'cantidad_asientos' => '4',
            'id_restaurante' => '10'
        ]);
        
		//factory('App\Mesa',30)->create();
    }
}
