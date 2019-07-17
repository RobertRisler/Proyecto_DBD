<?php

use Illuminate\Database\Seeder;

class MenuProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Menu_Producto::class)->create([
            'id_menu' => '1',
        	'id_producto' => '1'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '1',
        	'id_producto' => '2'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '2',
        	'id_producto' => '3'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '2',
        	'id_producto' => '4'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '2',
        	'id_producto' => '5'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '3',
        	'id_producto' => '6'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '4',
        	'id_producto' => '7'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '4',
        	'id_producto' => '8'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '5',
        	'id_producto' => '9'
        ]);

        factory(App\Menu_Producto::class)->create([
            'id_menu' => '5',
        	'id_producto' => '10'
        ]);



        //factory('App\Menu_Producto',30)->create();
    }
}
