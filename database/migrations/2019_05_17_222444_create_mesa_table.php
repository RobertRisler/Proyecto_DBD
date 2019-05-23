<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad_asientos');
            $table->boolean('estado_reservacion');
            $table->timestamps();

            $table->bigInteger('id_reserva');
            $table->bigInteger('id_restaurante');



            /*Llave foranea de reserva en mesa, por tener 1 * m */
            $table->foreign('id_reserva')
                ->references('id')
                ->on('reserva')
                ->onDelete('cascade');

            /*Llave foranea de restaurante en mesa, por tener 1 * m */
            $table->foreign('id_restaurante')
                ->references('id')
                ->on('restaurante')
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
        Schema::dropIfExists('mesa');
    }
}
