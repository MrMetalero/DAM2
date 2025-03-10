CORRECCIÓN: LE FALTA AL UPDATE 
SI CAMBIO EL NOMBRE_EQUIPO, TENGO QUE CONTAR QUE ESO NO HAGA QUE TENGA EL MÁXIMO

CREATE OR REPLACE FUNCTION limite_tecnico_pertenece_insert()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN

    IF (SELECT COUNT(*) FROM tecnico_pertenece WHERE fk_nombre_equipo = NEW.fk_nombre_equipo) >= 9 THEN
        RAISE NOTICE 'NO SE PUEDE INSERTAR MÁS DE 9 TÉCNICOS EN UN EQUIPO CONCRETO';
        RETURN NULL; 
    END IF;

    RETURN NEW;  
END;
$body$;




CREATE OR REPLACE TRIGGER tg_limite_tecnico_pertenece_insert
    BEFORE INSERT
    ON tecnico_pertenece
    FOR EACH ROW
    EXECUTE FUNCTION public.limite_tecnico_pertenece_insert();