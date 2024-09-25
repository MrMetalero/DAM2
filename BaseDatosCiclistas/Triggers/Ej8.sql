
CREATE OR REPLACE FUNCTION equipos_de_minimo_3_ciclistas() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
    IF ((SELECT COUNT(ciclista.nomeq) WHERE ciclista.nomeq = NEW.nomeq) < 3)
        THEN RAISE EXCEPTION 'NO SE PUEDE CREAR UN EQUIPO CON MENOS DE 3 CICLISTAS';
        RETURN NULL;
    ELSE 
        RETURN NEW;
    END IF;
END;
$body$; 


 -- NO SE PUEDE USAR "CREATE OR REPLACE" PORQUE PETA
CREATE CONSTRAINT TRIGGER tg_equipos_de_minimo_3_ciclistas
    AFTER INSERT
    ON public.equipo
    DEFERRABLE INITIALLY DEFERRED
    FOR EACH ROW
    EXECUTE FUNCTION public.equipos_de_minimo_3_ciclistas();
