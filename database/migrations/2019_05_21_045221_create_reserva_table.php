<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('cantidad_personas');
            $table->timestamps('fecha_reserva');
            $table->string('rut_cliente');
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->boolean('estado_reserva');
            $table->unsignedInteger('id_usuario');



            /*Llave foranea de usuario en reserva, por tener 1 * m */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
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
        Schema::dropIfExists('reserva');
    }
}
