<?php

use Illuminate\Database\Seeder;

class PedidoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Pedido_Producto::class)->create([
            'id_pedido' => '1',
        	'id_producto' => '1'
        ]);
    	
    	factory(App\Pedido_Producto::class)->create([
            'id_pedido' => '1',
        	'id_producto' => '2'
        ]);

        factory(App\Pedido_Producto::class)->create([
            'id_pedido' => '2',
        	'id_producto' => '5'
        ]);

        factory(App\Pedido_Producto::class)->create([
            'id_pedido' => '3',
        	'id_producto' => '10'
        ]);
        //factory('App\Pedido_Producto',30)->create();
    }
}
