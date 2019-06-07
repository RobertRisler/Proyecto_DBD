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
        factory('App\Menu_Restaurante',30)->create();
    }
}
