<?php

use Illuminate\Database\Seeder;

class Horario_RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Horario_Restaurante',30)->create();
    }
}
