<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Menu::class)->create([
            'nombre' => 'Vegetariano',
            'descripcion' => 'Almuerzos especializados para vegeratianos',
            'cantidad_productos' => '10',
            'id_categoria' => '2'
        ]);

        factory(App\Menu::class)->create([
            'nombre' => 'Vegano',
            'descripcion' => 'Almuerzos especializados para veganos',
            'cantidad_productos' => '5',
            'id_categoria' => '2'
        ]);

        factory(App\Menu::class)->create([
            'nombre' => 'Chileno',
            'descripcion' => 'Once con marraqueta y palta',
            'cantidad_productos' => '5',
            'id_categoria' => '3'
        ]);

        factory(App\Menu::class)->create([
            'nombre' => 'Peruano',
            'descripcion' => 'Un buen ceviche peruano para el almuerzo',
            'cantidad_productos' => '10',
            'id_categoria' => '2'
        ]);

        factory(App\Menu::class)->create([
            'nombre' => 'Americano',
            'descripcion' => 'Desayunos altos en energía para el día',
            'cantidad_productos' => '5',
            'id_categoria' => '1'
        ]);
        
		factory('App\Menu',30)->create();
    }
}
