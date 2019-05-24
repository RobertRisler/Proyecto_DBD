<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('id_pedido');
            $table->bigInteger('id_producto');

            /*Llave foranea pedido , por tener n * m */
            $table->foreign('id_pedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');

            /*Llave foranea producto, por tener n * m */
            $table->foreign('id_producto')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_producto');
    }
}
