<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Producto::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'precio_total'=>'',
            'tipo'=>'',
            'disponibilidad'=>''

        ]);

        factory(App\Producto::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'precio_total'=>'',
            'tipo'=>'',
            'disponibilidad'=>''

        ]);

        factory(App\Producto::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'precio_total'=>'',
            'tipo'=>'',
            'disponibilidad'=>''

        ]);

        factory(App\Producto::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'precio_total'=>'',
            'tipo'=>'',
            'disponibilidad'=>''

        ]);

        factory(App\Producto::class)->create([
            'nombre'=>'',
            'descripcion'=>'',
            'precio_total'=>'',
            'tipo'=>'',
            'disponibilidad'=>''

        ]);

		factory('App\Producto',30)->create();
    }
}
