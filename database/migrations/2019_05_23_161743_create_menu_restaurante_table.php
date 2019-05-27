<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuRestauranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_restaurante', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('id_menu');
            $table->bigInteger('id_restaurante');

            /*Llave foranea restaurnte , por tener n * m */
            $table->foreign('id_restaurante')
                ->references('id')
                ->on('restaurantes')
                ->onDelete('cascade');

            /*Llave foranea menu, por tener n * m */
            $table->foreign('id_menu')
                ->references('id')
                ->on('menus')
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
        Schema::dropIfExists('menu_restaurante');
    }
}
