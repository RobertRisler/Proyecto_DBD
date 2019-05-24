<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('id_menu');
            $table->bigInteger('id_producto');

            /*Llave foranea menu , por tener n * m */
            $table->foreign('id_menu')
                ->references('id')
                ->on('menu')
                ->onDelete('cascade');

            /*Llave foranea producto, por tener n * m */
            $table->foreign('id_producto')
                ->references('id')
                ->on('producto')
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
        Schema::dropIfExists('menu_producto');
    }
}
