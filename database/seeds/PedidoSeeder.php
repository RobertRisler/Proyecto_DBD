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
        //
        factory(App\Pedido::class)->create([
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'rut_cliente'=>'',
            'correo_cliente'=>'',
            'fecha'=>'',
            'tipo_entrega'=>'',
            'hora_estimada'=>'',
            'estado'=>'',
            'id_usuario'=>'',
            'id_despacho'=>'',
            'id_pago'=>''


        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'rut_cliente'=>'',
            'correo_cliente'=>'',
            'fecha'=>'',
            'tipo_entrega'=>'',
            'hora_estimada'=>'',
            'estado'=>'',
            'id_usuario'=>'',
            'id_despacho'=>'',
            'id_pago'=>''


        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'rut_cliente'=>'',
            'correo_cliente'=>'',
            'fecha'=>'',
            'tipo_entrega'=>'',
            'hora_estimada'=>'',
            'estado'=>'',
            'id_usuario'=>'',
            'id_despacho'=>'',
            'id_pago'=>''


        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'rut_cliente'=>'',
            'correo_cliente'=>'',
            'fecha'=>'',
            'tipo_entrega'=>'',
            'hora_estimada'=>'',
            'estado'=>'',
            'id_usuario'=>'',
            'id_despacho'=>'',
            'id_pago'=>''


        ]);

        factory(App\Pedido::class)->create([
            'nombre_cliente'=>'',
            'apellido_cliente'=>'',
            'rut_cliente'=>'',
            'correo_cliente'=>'',
            'fecha'=>'',
            'tipo_entrega'=>'',
            'hora_estimada'=>'',
            'estado'=>'',
            'id_usuario'=>'',
            'id_despacho'=>'',
            'id_pago'=>''


        ]);

        factory('App\Pedido',30)->create();
    }
}
