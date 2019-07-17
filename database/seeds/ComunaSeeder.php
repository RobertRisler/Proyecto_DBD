<?php

use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comuna::class)->create([
            'nombre' => 'Antofagasta',
            'id_ciudad' => '1'
        ]);
        
        factory(App\Comuna::class)->create([
            'nombre' => 'Mejillones',
            'id_ciudad' => '1'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Arica',
            'id_ciudad' => '2'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Camarones',
            'id_ciudad' => '2'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Lampa',
            'id_ciudad' => '3'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Alto Bio Bio',
            'id_ciudad' => '4'
        ]);
        
        factory(App\Comuna::class)->create([
            'nombre' => 'Antuco',
            'id_ciudad' => '4'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Calama',
            'id_ciudad' => '5'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'chillan viejo',
            'id_ciudad' => '6'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Pemuco',
            'id_ciudad' => '6'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Concepcion',
            'id_ciudad' => '7'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Caldera',
            'id_ciudad' => '8'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Tierra Amarilla',
            'id_ciudad' => '8'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Coquimbo',
            'id_ciudad' => '9'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Coyhaique',
            'id_ciudad' => '10'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Romeral',
            'id_ciudad' => '11'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Rauco',
            'id_ciudad' => '11'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Iquique',
            'id_ciudad' => '12'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'La Serena',
            'id_ciudad' => '13'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Linderos',
            'id_ciudad' => '14'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Los Andes',
            'id_ciudad' => '15'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Los Angeles',
            'id_ciudad' => '16'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Machali',
            'id_ciudad' => '17'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Osorno',
            'id_ciudad' => '18'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Paine',
            'id_ciudad' => '19'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Placilla',
            'id_ciudad' => '20'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Puchuncavi',
            'id_ciudad' => '21'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Puerto Montt',
            'id_ciudad' => '22'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Puerto Varas',
            'id_ciudad' => '23'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Punta Arenas',
            'id_ciudad' => '24'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Quilpue',
            'id_ciudad' => '25'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Rancagua',
            'id_ciudad' => '26'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'San Fernando',
            'id_ciudad' => '27'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'San Javier',
            'id_ciudad' => '28'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Santiago Centro',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Providencia',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'San Miguel',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Cerrillos',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Vitacura',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Recoleta',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Quilicura',
            'id_ciudad' => '29'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Talca',
            'id_ciudad' => '30'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Talcahuano',
            'id_ciudad' => '31'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Temuco',
            'id_ciudad' => '32'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Tiltil',
            'id_ciudad' => '33'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Valdivia',
            'id_ciudad' => '34'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Valparaiso',
            'id_ciudad' => '35'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Villa Alemana',
            'id_ciudad' => '36'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Villarrica',
            'id_ciudad' => '37'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Vina del Mar',
            'id_ciudad' => '38'
        ]);

        factory(App\Comuna::class)->create([
            'nombre' => 'Zapallar',
            'id_ciudad' => '39'
        ]);
        
        //factory('App\Comuna',30)->create();

    }
}
