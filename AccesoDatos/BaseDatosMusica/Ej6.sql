


CREATE OR REPLACE FUNCTION no_modificar_nombre_grupo()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE

BEGIN
    IF ()
    THEN 
      
        RETURN NULL;
    ELSE
        RETURN NEW;
    END IF;

END;
$body$;



CREATE CONSTRAINT TRIGGER no_modificar_nombre_grupo
    AFTER INSERT
    ON public.pertence
    FOR EACH ROW
    EXECUTE FUNCTION public.no_modificar_nombre_grupo();









