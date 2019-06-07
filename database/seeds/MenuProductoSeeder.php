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
        factory('App\Menu_Producto',30)->create();
    }
}
