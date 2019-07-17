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
            'nombre' => 'Antofagasta'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Arica'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Batuco'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Biobio'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Calama'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Chillan'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Concepcion'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Copiapo'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Coquimbo'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Coyhaique'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Curico'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Iquique'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'La Serena'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Linderos'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Los Andes'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Los Angeles'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Machali'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Osorno'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Paine'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Placilla'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Puchuncavi'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Puerto Montt'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Puerto Varas'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Punta Arenas'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Quilpue'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Rancagua'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'San Fernando'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'San Javier'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Santiago'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Talca'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Talcahuano'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Temuco'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Tiltil'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Valdivia'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Valparaiso'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Villa Alemana'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Villarrica'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Vina del Mar'
        ]);

        factory(App\Ciudad::class)->create([
            'nombre' => 'Zapallar'
        ]);
        
        //factory('App\Ciudad',30)->create();

    }
}
