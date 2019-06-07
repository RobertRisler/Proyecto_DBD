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
		/*DB::unprepared('
		 CREATE TRIGGER menu_cantidad_productos AFTER INSERT ON menus FOR EACH ROW
		 BEGIN
				SELECT menus
                FROM menus, productos, menus_productos
                WHERE menus.id = menus_productos.id_menu AND productos.id = menus_productos.id_producto 
				GROUP BY menus.id
                UPDATE menus
					SET cantidad_productos = sum(productos.precio_total)
		 END
		 ');*/
		 /*DB::unprepared('
		 CREATE OR REPLACE FUNCTION menu_cantidad_productos() 
		 RETURNS trigger AS 
		 $menu_cantidad_productos$ 
		 BEGIN 
		 SELECT menus
                FROM menus, productos, menus_productos
                WHERE menus.id = menus_productos.id_menu AND productos.id = menus_productos.id_producto 
				GROUP BY menus.id
                UPDATE menus
					SET cantidad_productos = sum(productos.precio_total) 
		 END 
		 $menu_cantidad_productos$ 
		 LANGUAGE plpgsql 
		 CREATE TRIGGER  menu_cantidad_productos AFTER INSERT ON menus 
		 FOR EACH ROW EXECUTE PROCEDURE menu_cantidad_productos(); 
		 ');*/
		 /*
		 DB::unprepared('
		 CREATE OR REPLACE FUNCTION menu_cantidad_productos() 
		 RETURNS trigger AS 
		 $menu_cantidad_productos$ 
		 BEGIN 
		 SELECT menus
                FROM menus, productos, menus_productos
                WHERE menus.id = menus_productos.id_menu AND productos.id = menus_productos.id_producto 
				GROUP BY menus.id
                UPDATE menus
					SET cantidad_productos = sum(productos.precio_total) 
		 END 
		 $menu_cantidad_productos$ 
		 LANGUAGE plpgsql 
		 CREATE TRIGGER menu_cantidad_productos AFTER INSERT ON menus 
		 FOR EACH ROW EXECUTE PROCEDURE menu_cantidad_productos(); 
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
