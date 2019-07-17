<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->boolean('estado_reservacion');

            $table->bigInteger('id_mesa');

            /*Llave foranea mesa, por tener 1 * n */
            $table->foreign('id_mesa')
                ->references('id')
                ->on('mesas')
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
        Schema::dropIfExists('horarios_mesas');
    }
}
