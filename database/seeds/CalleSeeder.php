<?php

use Illuminate\Database\Seeder;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Calle',30)->create();
    }
}
