<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mensaje_comentario');
            $table->integer('valoracion');
            $table->timestamp('fecha_comentario');

            $table->timestamps();


            $table->bigInteger('id_usuario');
            $table->bigInteger('id_restaurante');

            /*Llave foranea de usuario en comentario, por tener 1 * m */
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            /*Llave foranea de restaurante en comentario, por tener 1 * m */
            $table->foreign('id_restaurante')
                ->references('id')
                ->on('restaurantes')
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
        Schema::dropIfExists('comentarios');
    }
}
