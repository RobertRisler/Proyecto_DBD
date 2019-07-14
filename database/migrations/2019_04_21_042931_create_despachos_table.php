<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_repartidor');
            $table->string('rut_repartidor');
            $table->string('tiempo_estimado');
            $table->boolean('estado_despacho');
            $table->string('hora_despacho');
			$table->bigInteger('id_calle');

            /*Llave foranea calle, por tener 1 * n */
            $table->foreign('id_calle')
                ->references('id')
                ->on('calles')
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
        Schema::dropIfExists('despachos');
    }
}
