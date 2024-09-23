CREATE OR REPLACE FUNCTION max_20_ciclistas_equipo()
RETURNS trigger
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $BODY$
DECLARE equipo_a_comprobar 

BEGIN
    IF ((SELECT COUNT(nomeq) FROM ciclista)> 20)
    
END;
$BODY$;


CREATE OR REPLACE TRIGGER tg_max_20_ciclistas_equipo
BEFORE INSERT OR UPDATE
ON ciclista FOR EACH ROW
EXECUTE FUNCTION max_20_ciclistas_equipo();