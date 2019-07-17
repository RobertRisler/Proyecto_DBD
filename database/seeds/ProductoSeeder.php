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
        factory(App\Producto::class)->create([
            'nombre' => 'pan integral con mantequilla y café',
            'descripcion' => 'El desayuno típico',
            'precio_total' => '2500',
            'tipo' => 'Desayuno',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Ensalada de varias verduras',
            'descripcion' => 'Una ensalada para tener un almuerzo ligero',
            'precio_total' => '2000',
            'tipo' => 'Almuerzo',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Ceviche de tofu',
            'descripcion' => 'Rico ceviche preparado al estilo peruano',
            'precio_total' => '4000',
            'tipo' => 'Entrada',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'pan con mayo vegana y café',
            'descripcion' => 'Un sandwich con un buen café para comenzar el día',
            'precio_total' => '1750',
            'tipo' => 'Desayuno',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Pizza vegana familiar',
            'descripcion' => 'Exquisita pizza preparada con los mejores vegetales',
            'precio_total' => '8900',
            'tipo' => 'Almuerzo',
            'disponibilidad' => 'False'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Completo dinámico',
            'descripcion' => 'Un completo con todos los ingredientes chilenos',
            'precio_total' => '2000',
            'tipo' => 'Almuerzo',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Pizza vegetariana familiar',
            'descripcion' => 'Exquisita pizza preparada con los mejores vegetales',
            'precio_total' => '8900',
            'tipo' => 'Almuerzo',
            'disponibilidad' => 'False'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Ceviche de reineta',
            'descripcion' => 'Rico ceviche preparado al estilo peruano',
            'precio_total' => '4000',
            'tipo' => 'Entrada',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Ave mayo y café',
            'descripcion' => 'Un sandwich con un buen café para comenzar el día',
            'precio_total' => '1750',
            'tipo' => 'Desayuno',
            'disponibilidad' => 'True'
        ]);

        factory(App\Producto::class)->create([
            'nombre' => 'Huevos con tocino y café',
            'descripcion' => 'El desayuno típico americano',
            'precio_total' => '2500',
            'tipo' => 'Desayuno',
            'disponibilidad' => 'True'
        ]);
        
		//factory('App\Producto',30)->create();
    }
}
