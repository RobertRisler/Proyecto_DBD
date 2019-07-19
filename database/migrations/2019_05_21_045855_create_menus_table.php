<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad_productos');

            $table->bigInteger('id_categoria');
            $table->bigInteger('id_restaurante');

            /*Llave foranea de categoria en menu, por tener 1 * 1 */
            $table->foreign('id_categoria')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');

            /*Llave foranea de restaurante en menu, por tener 1 * m */
            $table->foreign('id_restaurante')
                ->references('id')
                ->on('restaurantes')
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
        Schema::dropIfExists('menus');
    }
}
