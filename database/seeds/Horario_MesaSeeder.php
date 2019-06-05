<?php

use Illuminate\Database\Seeder;

class Horario_MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Horario_Mesa',30)->create();
    }
}
