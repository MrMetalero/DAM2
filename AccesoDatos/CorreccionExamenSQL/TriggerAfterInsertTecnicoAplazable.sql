
ESTA HAY QUE MODIFICARLA PORQUE ME FALTA EL TRIGGER

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
    ON tecnicos
    FOR EACH ROW
    EXECUTE FUNCTION public.historico_equipos();