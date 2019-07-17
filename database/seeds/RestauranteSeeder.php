<?php

use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurante::class)->create([
            'nombre' => 'PizzaHut',
            'descripcion' => 'Pizzas',
            'promedio_valoracion' => '3',
            'telefono' => '876876876',
            'hace_despacho' => 'True',
            'validacion' => 'True',
            'id_calle' => '35'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Domino',
            'descripcion' => 'Comida Rapida',
            'promedio_valoracion' => '2',
            'telefono' => '174036929',
            'hace_despacho' => 'False',
            'validacion' => 'True',
            'id_calle' => '36'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'McDonalds',
            'descripcion' => 'Hamburguesas',
            'promedio_valoracion' => '1',
            'telefono' => '639564937',
            'hace_despacho' => 'False',
            'validacion' => 'True',
            'id_calle' => '37'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'La pica del Jorge',
            'descripcion' => 'Completos',
            'promedio_valoracion' => '4',
            'telefono' => '658946927',
            'hace_despacho' => 'True',
            'validacion' => 'False',
            'id_calle' => '38'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Donde el tío enojao',
            'descripcion' => 'Churrascos, completos',
            'promedio_valoracion' => '5',
            'telefono' => '109362753',
            'hace_despacho' => 'False',
            'validacion' => 'False',
            'id_calle' => '39'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Via Pizza Centro',
            'descripcion' => 'Pizzas',
            'promedio_valoracion' => '3',
            'telefono' => '876892876',
            'hace_despacho' => 'True',
            'validacion' => 'True',
            'id_calle' => '54'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Domino a Domicilio',
            'descripcion' => 'Comida Rapida',
            'promedio_valoracion' => '4',
            'telefono' => '174045929',
            'hace_despacho' => 'True',
            'validacion' => 'True',
            'id_calle' => '53'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'KFC',
            'descripcion' => 'Hamburguesas de Pollo',
            'promedio_valoracion' => '3',
            'telefono' => '639569937',
            'hace_despacho' => 'False',
            'validacion' => 'True',
            'id_calle' => '52'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'La pica del George',
            'descripcion' => 'Completos',
            'promedio_valoracion' => '4',
            'telefono' => '633946927',
            'hace_despacho' => 'True',
            'validacion' => 'False',
            'id_calle' => '51'
        ]);

        factory(App\Restaurante::class)->create([
            'nombre' => 'Donde el tío pelao',
            'descripcion' => 'Churrascos, completos',
            'promedio_valoracion' => '3',
            'telefono' => '759310753',
            'hace_despacho' => 'False',
            'validacion' => 'False',
            'id_calle' => '50'
        ]);

		//factory('App\Restaurante',30)->create();
    }
}
