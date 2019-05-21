<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('rut_cliente');
            $table->string('correo_cliente');
            $table->timestamps('fecha_pedido');
            $table->boolean('tipo_entrega');
            $table->timestamps('hora_estimada');
            $table->int('estado_pedido');
            $table->unsignedInteger('id_usuario');
            $table->unsignedInteger('id_despacho');
            $table->unsignedInteger('id_pago');




            /*Llave foranea de usuario en pedido, por tener 1 * m */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade');

            /*Llave foranea de despacho en pedido, por tener 1 * 1 */
            $table->foreign('id_despacho')
                ->references('id')
                ->on('despacho')
                ->onDelete('cascade');

            /*Llave foranea de pago en pedido, por tener 1 * 1 */
            $table->foreign('id_pago')
                ->references('id')
                ->on('pago')
                ->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
