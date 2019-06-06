<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_productos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_menu');
            $table->bigInteger('id_producto');

            /*Llave foranea menu , por tener n * m */
            $table->foreign('id_menu')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade');

            /*Llave foranea producto, por tener n * m */
            $table->foreign('id_producto')
                ->references('id')
                ->on('productos')
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
        Schema::dropIfExists('menus_productos');
    }
}
