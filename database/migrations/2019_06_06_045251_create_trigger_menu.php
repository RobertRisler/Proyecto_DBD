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
		/*DB::statement('
        CREATE OR REPLACE FUNCTION ContarProductos()
            RETURNS TRIGGER AS 
            $ContarProductos$
            BEGIN
                SELECT * 
                FROM menu, producto, menu_producto
                WHERE menu.id = menu_producto.id_menu AND producto.id = menu_producto.id_producto 
				GROUP BY menu.id
                UPDATE menu
					SET cantidad_productos = sum(producto.precio_total)
			END
				$$ LANGUAGE plpgsql;
        ');*/
        DB::unprepared('
		 CREATE TRIGGER menu_cantidad_productos AFTER INSERT ON `menu` FOR EACH ROW
		 BEGIN
				SELECT * 
                FROM menu, producto, menu_producto
                WHERE menu.id = menu_producto.id_menu AND producto.id = menu_producto.id_producto 
				GROUP BY menu.id
                UPDATE menu
					SET cantidad_productos = sum(producto.precio_total)
		 END
		 ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `menu_cantidad_productos`');
    }
}
