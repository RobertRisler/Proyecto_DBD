<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_menu');
            $table->string('descripcion_menu');
            $table->integer('cantidad_productos');


            $table->bigInteger('id_categoria');
            /*Llave foranea de categoria en menu, por tener 1 * 1 */
            $table->foreign('id_categoria')
                ->references('id')
                ->on('categoria')
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
        Schema::dropIfExists('menu');
    }
}
