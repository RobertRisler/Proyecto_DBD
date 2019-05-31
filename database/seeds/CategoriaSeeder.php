<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
/*
        factory(App\Categoria::class)->create([
            'nombre'=>'Desayuno',
            'descripcion'=>''

        ]);

        factory(App\Categoria::class)->create([
            'nombre'=>'Almuerzo',
            'descripcion'=>'Escoge los mejores puntos para disfrutar de un gran almuerzo'

        ]);

        factory(App\Categoria::class)->create([
            'nombre'=>'Once',
            'descripcion'=>''

        ]);

        factory(App\Categoria::class)->create([
            'nombre'=>'Cena',
            'descripcion'=>''

        ]);

        factory(App\Categoria::class)->create([
            'nombre'=>'Bebestibles',
            'descripcion'=>''

        ]);*/

		factory('App\Categoria',30)->create();
    }
}
