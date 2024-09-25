--Evitar cambiar la edad a una menor
CREATE OR REPLACE FUNCTION no_cambios_a_edad_menor() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
    IF (NEW.edad < OLD.edad)
    THEN RAISE NOTICE 'NO SE PUEDE PONER UNA EDAD MENOR';
        RETURN NULL;
    ELSE RETURN NEW;
    END IF;
END;
$body$; 



CREATE OR REPLACE TRIGGER tg_no_cambios_a_edad_menor
    BEFORE UPDATE
    ON public.ciclista
    FOR EACH ROW
    EXECUTE FUNCTION public.no_cambios_a_edad_menor();
