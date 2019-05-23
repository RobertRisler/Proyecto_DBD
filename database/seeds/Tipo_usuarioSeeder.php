<?php

use Illuminate\Database\Seeder;

class Tipo_usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		factory('App\Tipo_usuario',30)->create();
    }
}
