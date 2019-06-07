<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo');
            $table->decimal('monto');
            $table->timestamp('fecha');
            

            $table->bigInteger('id_tarjeta')->nullable();

            /*Llave foranea de tarjeta en pago, por tener 1 * m */
            $table->foreign('id_tarjeta')
                ->references('id')
                ->on('tarjetas')
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
        Schema::dropIfExists('pagos');
    }
}
