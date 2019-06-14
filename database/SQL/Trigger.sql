/* Trigger para verificar que los horarios de inicio y fin estén correctos */
CREATE OR REPLACE FUNCTION comparar_horarios()
RETURNS trigger AS
$BODY$
BEGIN
  	IF NEW.hora_fin <= NEW.hora_inicio THEN
    	RAISE EXCEPTION 'No es posible insertar';
  	END IF;
    IF NEW.hora_fin > NEW.hora_inicio THEN
    	RETURN NEW;
  	END IF;
END;
$BODY$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS comparacion_horarios ON horarios_mesas;

CREATE TRIGGER comparacion_horarios
BEFORE INSERT ON horarios_mesas
FOR EACH ROW
EXECUTE PROCEDURE comparar_horarios();


/* Asigna el tipo de rol usuario a cualquier usuario nuevo */
CREATE OR REPLACE FUNCTION dar_rol()
RETURNS trigger AS
$BODY$
    BEGIN
    IF NEW.id > 5 THEN
        UPDATE usuarios
        SET id_tipo_usuario = 2
        WHERE usuarios.id = NEW.id;
    END IF;
    RETURN NEW;
    END;
$BODY$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS asignar_rol ON usuarios;

CREATE TRIGGER asignar_rol
AFTER INSERT ON usuarios
FOR EACH ROW
EXECUTE PROCEDURE dar_rol();

/* Asigna la cantidad generica de sillas a una mesa con 0 sillas */
CREATE OR REPLACE FUNCTION mesas_por_defecto()
RETURNS trigger AS
$$
    BEGIN
    IF NEW.cantidad_asientos = 0 THEN
        UPDATE mesas
        SET cantidad_asientos = 4
        WHERE mesas.id = NEW.id;
    END IF;
    RETURN NEW;
    END;
$$
LANGUAGE plpgsql;

DROP TRIGGER IF EXISTS cantidad_sillas ON mesas;

CREATE TRIGGER cantidad_sillas
AFTER INSERT ON mesas
FOR EACH ROW
EXECUTE PROCEDURE mesas_por_defecto();