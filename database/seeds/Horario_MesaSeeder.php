<?php

use Illuminate\Database\Seeder;

class Horario_MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '17:01:00',
            'hora_fin' => '18:00:00',
            'estado_reservacion' => 'True',
            'id_mesa' => '1'
        ]);

        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '17:01:00',
            'hora_fin' => '18:00:00',
            'estado_reservacion' => 'True',
            'id_mesa' => '2'
        ]);
        
        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '12:01:00',
            'hora_fin' => '13:00:00',
            'estado_reservacion' => 'False',
            'id_mesa' => '3'
        ]);
        
        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '16:01:00',
            'hora_fin' => '17:00:00',
            'estado_reservacion' => 'False',
            'id_mesa' => '4'
        ]);

        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '17:01:00',
            'hora_fin' => '18:00:00',
            'estado_reservacion' => 'True',
            'id_mesa' => '5'
        ]);

        factory(App\Horario_Mesa::class)->create([
            'hora_inicio' => '17:01:00',
            'hora_fin' => '18:00:00',
            'estado_reservacion' => 'True',
            'id_mesa' => '6'
        ]);

        //factory('App\Horario_Mesa',30)->create();
    }
}
