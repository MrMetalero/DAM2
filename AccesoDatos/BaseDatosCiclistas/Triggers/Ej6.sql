CREATE OR REPLACE FUNCTION impedir_cambio() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN

    IF (NEW.nombre NOT LIKE OLD.nombre)
    THEN 
        RAISE NOTICE 'NO SE PUEDE MODIFICAR EL NOMBRE';
        RETURN NULL;
    END IF;
    RETURN NEW;
END;
$body$; 


CREATE OR REPLACE TRIGGER tg_impedir_cambio
BEFORE UPDATE
ON ciclista
FOR EACH ROW
EXECUTE PROCEDURE impedir_cambio()


