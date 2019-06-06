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
            'nombre' => 'Curicó'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Temuco'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Santiago'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Talca'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Valdivia'
        ]);
        
        factory('App\Ciudad',30)->create();

    }
}
