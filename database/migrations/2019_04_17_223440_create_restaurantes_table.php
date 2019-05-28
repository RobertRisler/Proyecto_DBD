<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamp('hora_apertura');
            $table->timestamp('hora_cierre');
            $table->boolean('promedio_valoracion');
            $table->string('telefono');
            $table->boolean('hace_despacho');
            $table->boolean('validacion');

            $table->bigInteger('id_calle');

            /*Llave foranea calle, por tener 1 * n */
            /*
            $table->foreign('id_calle')
                ->references('id')
                ->on('calles')
                ->onDelete('cascade');
            */
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
        Schema::dropIfExists('restaurantes');
    }
}
