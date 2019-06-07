/*CREATE OR REPLACE FUNCTION actualizar_valoracion()
RETRUNS trigger AS
$BODY$
BEGIN

END;
$BODY$ LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS  actualizar_valoracion_restaurant ON comentarios;

CREATE TRIGGER actualizar_valoracion_restaurant
AFTER INSERT ON comentarios
FOR EACH ROW
EXECUTE PROCEDURE actualizar_valoracion();*/

CREATE OR REPLACE FUNCTION menu_cantidad_productos() 
RETURNS trigger AS 
$menu_cantidad_productos$ 
BEGIN 
    SELECT menus
    FROM menus, productos, menus_productos
    GROUP BY productos.id
    UPDATE menus
    SET cantidad_productos = COUNT(*)
    WHERE menus.id = menus_productos.id_menu AND productos.id = menus_productos.id_producto 
END;
$menu_cantidad_productos$ LANGUAGE plpgsql;

CREATE TRIGGER  menu_cantidad_productos 
AFTER INSERT ON menus 
FOR EACH ROW EXECUTE PROCEDURE menu_cantidad_productos(); 