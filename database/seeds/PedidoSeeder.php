<?php

use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pedido::class)->create([
            'nombre_cliente' => 'Roberto',
            'apellido_cliente' => 'Lillo',
            'rut_cliente' => '192837362',
            'correo_cliente' => 'roberto.lillo@usach.cl',
            'fecha' => '2018-06-03',
            'tipo_entrega' => 'True',
            'hora_estimada' => '00:15:00',
            'estado' => 'True',
            'id_usuario' => '1',
            'id_despacho' => '1',
            'id_pago' => '1',
            'id_restaurante' => '1'
        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente' => 'Javier',
            'apellido_cliente' => 'Pérez',
            'rut_cliente' => '173839280',
            'correo_cliente' => 'javier@gmail.es',
            'fecha' => '2019-10-11',
            'tipo_entrega' => 'True',
            'hora_estimada' => '17:30:00',
            'estado' => 'False',
            'id_usuario' => '2',
            'id_despacho' => '2',
            'id_pago' => '2',
            'id_restaurante' => '2'
        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente' => 'Juan',
            'apellido_cliente' => 'Rodriguez',
            'rut_cliente' => '67397463',
            'correo_cliente' => 'juanito.rod@live.pl',
            'fecha' => '2008-12-07',
            'tipo_entrega' => 'False',
            'hora_estimada' => '09:15:00',
            'estado' => 'True',
            'id_usuario' => '3',
            'id_pago' => '3',
            'id_restaurante' => '3'
        ]);
        /*
        factory(App\Pedido::class)->create([
            'nombre_cliente' => 'Manuel',
            'apellido_cliente' => 'Gutierrez',
            'rut_cliente' => '173299372',
            'correo_cliente' => 'manuel.gutierrez@gmail.com',
            'fecha' => '2019-06-08',
            'tipo_entrega' => 'False',
            'hora_estimada' => '21:00:00',
            'estado' => 'False',
            'id_usuario' => '2',
            'id_pago' => '4'
        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente' => 'Luis',
            'apellido_cliente' => 'Cortés',
            'rut_cliente' => '173839290',
            'correo_cliente' => 'cortes.luis@hotmail.com',
            'fecha' => '2017-07-07',
            'tipo_entrega' => 'True',
            'hora_estimada' => '16:00:00',
            'estado' => 'True',
            'id_usuario' => '5',
            'id_despacho' => '3',
            'id_pago' => '5'
        ]);
        
        factory('App\Pedido',30)->create();
        */
    }
}
