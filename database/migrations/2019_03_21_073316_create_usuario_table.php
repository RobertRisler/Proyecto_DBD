<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_usuario');
            $table->string('apellido_usuario');
            $table->string('correo_usuario')->unique();
            $table->string('contrasena');


            $table->bigInteger('id_tipo_usuario');

            /*Llave foranea de tipo_usuario en usuario, por tener 1 * m */
            $table->foreign('id_tipo_usuario')
                ->references('id')
                ->on('tipo_usuario')
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
        Schema::dropIfExists('usuario');
    }
}
