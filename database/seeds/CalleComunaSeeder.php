<?php

use Illuminate\Database\Seeder;

class CalleComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Calle_Comuna',30)->create();
    }
}
