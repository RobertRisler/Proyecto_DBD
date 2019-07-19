<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->boolean('validacion')->nullable();
            
            $table->bigInteger('id_usuario');
            $table->bigInteger('id_restaurante')->nullable();

            /*Llave foranea usuario, por tener 1 * 1 */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');
                
            /*Llave foranea restaurante, por tener 1 * 1 */
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
        Schema::dropIfExists('peticiones');
    }
}
