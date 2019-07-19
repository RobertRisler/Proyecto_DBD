<?php

use Illuminate\Database\Seeder;

class PeticionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Peticion::class)->create([
            'descripcion' => 'Tengo una picada en Tobalaba 3627, se llama la Picá del Bomber y me gustaría poder agregarla a la plataforma.',
            'validacion' => false,
            'id_usuario' => '3',
            'id_restaurante' => null
        ]);
        
        factory(App\Peticion::class)->create([
            'descripcion' => 'Quisiera agregar mi restaurante PizzaHut ubicado en Las Acacias 2001.',
            'validacion' => true,
            'id_usuario' => '4',
            'id_restaurante' => '1'
        ]);

        factory(App\Peticion::class)->create([
            'descripcion' => 'Quiero agregar mi restaurante familiar, se encuentra en caupolican 198 en Temuco.',
            'id_usuario' => '4',
            'id_restaurante' => '1'
        ]);
    }
}
