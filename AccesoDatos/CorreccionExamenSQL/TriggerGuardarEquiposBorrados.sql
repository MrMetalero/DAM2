--RI1: Cuando se borre un registro de la tabla Equipo, se deben almacear sus datos en la tabla equiposborrados 
--ES DE AFTER PARA ASEGURARME DE QUE SE GUARDE EN LA TABLA SOLO SI SE COMPLETA LA OPERACIÓN

CREATE OR REPLACE FUNCTION historico_equipos()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE

BEGIN
    INSERT INTO equiposborrados ("fechaborrado","nombre","localidad","anyofundacion") 
    VALUES
    (CURRENT_DATE,OLD.nombre,OLD.localidad,OLD.anyofundacion);
    RETURN NEW;
END;
$body$;



CREATE OR REPLACE TRIGGER tg_historico_equipos
    AFTER DELETE
    ON equipos
    FOR EACH ROW
    EXECUTE FUNCTION public.historico_equipos();

