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
        //
        /*
        factory(App\Menu::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'cantidad_productos'=>'',
            'id_categoria'=>'1'

        ]);

        factory(App\Menu::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'cantidad_productos'=>'',
            'id_categoria'=>'1'

        ]);

        factory(App\Menu::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'cantidad_productos'=>'',
            'id_categoria'=>'1'

        ]);

        factory(App\Menu::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'cantidad_productos'=>'',
            'id_categoria'=>'1'

        ]);

        factory(App\Menu::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'cantidad_productos'=>'',
            'id_categoria'=>'1'

        ]);

        */

		factory('App\Menu',30)->create();
    }
}
