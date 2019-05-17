<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestauranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_restaurante');
            $table->string('descripcion');
            $table->string('categoria_comida');


            $table->timestamps('hora_apertura');
            $table->timestamps('hora_cierre');
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
        Schema::dropIfExists('restaurante');
    }
}
