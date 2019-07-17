<?php

use Illuminate\Database\Seeder;

class MenuRestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Menu_Restaurante::class)->create([
            'id_menu' => '1',
        	'id_restaurante' => '2'
        ]);

        factory(App\Menu_Restaurante::class)->create([
            'id_menu' => '2',
        	'id_restaurante' => '2'
        ]);

        factory(App\Menu_Restaurante::class)->create([
            'id_menu' => '3',
        	'id_restaurante' => '1'
        ]);

        factory(App\Menu_Restaurante::class)->create([
            'id_menu' => '4',
        	'id_restaurante' => '3'
        ]);

        factory(App\Menu_Restaurante::class)->create([
            'id_menu' => '5',
        	'id_restaurante' => '1'
        ]);
        

        //factory('App\Menu_Restaurante',30)->create();
    }
}
