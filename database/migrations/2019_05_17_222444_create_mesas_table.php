<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad_asientos');

            $table->bigInteger('id_reserva')->nullable();
            $table->bigInteger('id_restaurante');

            /*Llave foranea de reserva en mesa, por tener 1 * m */
            $table->foreign('id_reserva')
                ->references('id')
                ->on('reservas')
                ->onDelete('cascade');

            /*Llave foranea de restaurante en mesa, por tener 1 * m */
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
        Schema::dropIfExists('mesas');
    }
}
