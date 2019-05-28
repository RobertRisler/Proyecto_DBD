<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallesComunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calles_comunas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_calle');
            $table->bigInteger('id_comuna');
            
            /*Llave foranea calle, por tener 1 * n */
            $table->foreign('id_calle')
                ->references('id')
                ->on('calles')
                ->onDelete('cascade');
            
            /*Llave foranea comuna, por tener 1 * n */
            $table->foreign('id_comuna')
                ->references('id')
                ->on('comunas')
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
        Schema::dropIfExists('calles_comunas');
    }
}
