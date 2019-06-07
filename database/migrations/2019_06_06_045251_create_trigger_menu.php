<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
        DB::unprepared('
		 
		 
		  
        CREATE TRIGGER menu_cantidad_productos AFTER INSERT ON ´menus´ FOR EACH ROW
            BEGIN
                INSERT INTO menus_productos (´id_pedido´, ´id_producto´, ´created_at´, ´updated_at´)
                VALUES (3, 2, now(), null);
            END
        
		 
		 ');



*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER menu_cantidad_productos');
    }
}
