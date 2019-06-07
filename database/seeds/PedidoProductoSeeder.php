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
        factory('App\Pedido_Producto',30)->create();
    }
}
