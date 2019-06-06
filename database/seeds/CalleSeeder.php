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
<<<<<<< HEAD
        //
=======
        factory(App\Calle::class)->create([
            'nombre' => 'Los aromos',
            'numero' => 540
        ]);
        
        factory(App\Calle::class)->create([
            'nombre' => 'Las acacias',
            'numero' => 2001
        ]);

        factory(App\Calle::class)->create([
            'nombre' => 'Los Helechos',
            'numero' => 1432
        ]);

        factory(App\Calle::class)->create([
            'nombre' => 'Luis chacón',
            'numero' => 298
        ]);

        factory(App\Calle::class)->create([
            'nombre' => 'Reina Victoria',
            'numero' => 6728
        ]);
        
        factory('App\Calle',30)->create();
>>>>>>> 2573bd8f4c6a3c844606a7884fb2183969f83a54
    }
}
