--Habría que cancelar la operación de borrado o creado de la tabla concreta

CREATE OR REPLACE FUNCTION evitar_eliminar_crear_equipos() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
  RAISE NOTICE 'NO SE PUEDE CREAR O ELIMINAR UN EQUIPO';
  RETURN NULL;
END;
$body$; 


CREATE OR REPLACE TRIGGER tg_evitar_eliminar_crear_equipos
BEFORE INSERT OR DELETE
ON equipo
FOR EACH ROW
EXECUTE PROCEDURE evitar_eliminar_crear_equipos() 


