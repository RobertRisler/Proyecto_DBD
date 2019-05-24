<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('actividad');
            $table->string('descripcion');
            $table->timestamp('fecha_actividad');

            $table->bigInteger('id_usuario');
            
            /*Llave foranea de usuario en historial, por tener 1 * 1 */
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
        Schema::dropIfExists('historial');
    }
}
