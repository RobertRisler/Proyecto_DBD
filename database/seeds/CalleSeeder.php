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
        /*factory(App\Calle::class)->create([
            'nombre'=>'Los aromos',
            'numero'=>540

        ]);

        factory(App\Calle::class)->create([
            'nombre'=>'Las acacias',
            'numero'=>2001

        ]);

        factory(App\Calle::class)->create([
            'nombre'=>'Los alerces',
            'numero'=>456

        ]);

        factory(App\Calle::class)->create([
            'nombre'=>'Luis chacón',
            'numero'=>298

        ]);

        factory(App\Calle::class)->create([
            'nombre'=>'Dos oriente',
            'numero'=>657

        ]);
*/

        factory('App\Calle',30)->create();
    }
}
