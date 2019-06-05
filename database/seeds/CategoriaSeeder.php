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
        factory(App\Categoria::class)->create([
            'nombre' => 'Desayuno',
            'descripcion' => 'Una rica y nutritiva comida para comenzar el día'
        ]);

        factory(App\Categoria::class)->create([
            'nombre' => 'Almuerzo',
            'descripcion' => 'Escoge los mejores puntos para disfrutar de un gran almuerzo'
        ]);

        factory(App\Categoria::class)->create([
            'nombre' => 'Once',
            'descripcion' => 'La comida de la tarde'
        ]);

        factory(App\Categoria::class)->create([
            'nombre' => 'Cena',
            'descripcion' => 'Que tu última comida del día sea la mejor'
        ]);

        factory(App\Categoria::class)->create([
            'nombre' => 'Bebestibles',
            'descripcion' => 'Una gran selección de bebestibles para saciar tu sed'
        ]);
        
		factory('App\Categoria',30)->create();
    }
}
