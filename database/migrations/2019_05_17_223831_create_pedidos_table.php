<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->string('rut_cliente');
            $table->string('correo_cliente');
            $table->timestamp('fecha_pedido');
            $table->boolean('tipo_entrega');
            $table->timestamp('hora_estimada');
            $table->integer('estado_pedido');
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_despacho');
            $table->bigInteger('id_pago');




            /*Llave foranea de usuario en pedido, por tener 1 * m */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            /*Llave foranea de despacho en pedido, por tener 1 * 1 */
            $table->foreign('id_despacho')
                ->references('id')
                ->on('despachos')
                ->onDelete('cascade');

            /*Llave foranea de pago en pedido, por tener 1 * 1 */
            $table->foreign('id_pago')
                ->references('id')
                ->on('pagos')
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
        Schema::dropIfExists('pedidos');
    }
}
