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
            $table->string('nombre_restaurante');
            $table->string('descripcion');
            $table->timestamp('hora_apertura');
            $table->timestamp('hora_cierre');
            $table->boolean('promedio_valoracion');
            $table->string('telefono_restaurante');
            $table->boolean('hace_despacho');
            $table->boolean('validacion');

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
