<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\Ciudad::class)->create([
            'nombre'=>'Curicó'

        ]);

        factory(App\Ciudad::class)->create([
            'nombre'=>'Cerro Navia'

        ]);

        factory(App\Ciudad::class)->create([
            'nombre'=>'Estación Central'

        ]);

        factory(App\Ciudad::class)->create([
            'nombre'=>'Providencia'

        ]);

        factory(App\Ciudad::class)->create([
            'nombre'=>'Valdivia'

        ]);

        factory('App\Ciudad',30)->create();
    }
}
