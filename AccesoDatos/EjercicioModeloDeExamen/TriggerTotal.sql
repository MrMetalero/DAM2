
CREATE OR REPLACE FUNCTION herencia_total_entre_casa_y_vivienda()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE

BEGIN
    IF EXISTS (SELECT * FROM casas WHERE id_casa = OLD.id_vivienda)
    THEN 
    RAISE NOTICE 'NO PUEDES ELIMINAR DE ESTE B PORQUE TIENE RESTRICCIÓN TOTAL EN CASA';
        RETURN NULL;
    ELSE
        
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_entre_casa_y_vivienda
    BEFORE DELETE
    ON public.empleados
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_entre_casa_y_vivienda();

--COMPRUBA SI HA BORRADO YA DE INMUEBLES EN UN TRIGGER DE BEFORE? --
--SI, BEFORE FUNCIONA --




