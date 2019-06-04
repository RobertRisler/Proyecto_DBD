<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_restaurantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dia_semana');
            $table->time('hora_apertura');
            $table->time('hora_cierre');

            $table->bigInteger('id_restaurante');

            /*Llave foranea restaurante, por tener 1 * n */
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
        Schema::dropIfExists('horarios_restaurantes');
    }
}
