<?php

use Illuminate\Database\Seeder;

class Horario_RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Horario_Restaurante::class)->create([
            'dia_semana' => 'Lunes',
            'hora_apertura' => '08:00:00',
            'hora_cierre' => '18:00:00',
            'id_restaurante' => '1'
        ]);

        factory(App\Horario_Restaurante::class)->create([
            'dia_semana' => 'Martes',
            'hora_apertura' => '08:00:00',
            'hora_cierre' => '18:00:00',
            'id_restaurante' => '1'
        ]);

        factory(App\Horario_Restaurante::class)->create([
            'dia_semana' => 'Sábado',
            'hora_apertura' => '09:00:00',
            'hora_cierre' => '14:00:00',
            'id_restaurante' => '1'
        ]);

        factory(App\Horario_Restaurante::class)->create([
            'dia_semana' => 'Jueves',
            'hora_apertura' => '08:00:00',
            'hora_cierre' => '18:00:00',
            'id_restaurante' => '2'
        ]);

        factory(App\Horario_Restaurante::class)->create([
            'dia_semana' => 'Domingo',
            'hora_apertura' => '12:00:00',
            'hora_cierre' => '15:00:00',
            'id_restaurante' => '3'
        ]);

        factory('App\Horario_Restaurante',30)->create();
    }
}
