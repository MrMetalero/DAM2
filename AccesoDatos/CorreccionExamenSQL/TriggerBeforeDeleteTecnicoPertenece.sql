
EJERCICIO: HACER ESTO EN CASA Y PROBAR  CON BEFORE Y CON AFTER PARA VER CUAL ES CORRECTO


After delete r3 ADDSi no existe el técnico, no intervengo porque vengo de CASCADE
    si existe en técnino y es el último R3, RAISE EXCEPTION
    Si existe en técnico y nos es el último R3 no intervengo


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