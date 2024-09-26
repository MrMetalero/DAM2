
--Crear el campo en equipo para la cuenta de ciclistas
ALTER TABLE equipo
ADD COLUMN nciclistas INTEGER;




CREATE OR REPLACE FUNCTION calcular_numero_ciclistas_de_equipo() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$

BEGIN
    --MEJORABLE USANDO UN IF ELSE COMPROBANDO QUE NO SEA NULO EL NÚMERO DE CICLISTAS

    UPDATE equipo
    SET nciclistas = (SELECT COUNT(*) FROM ciclista WHERE equipo.nomeq = ciclista.nomeq);
END;
$body$; 



CREATE OR REPLACE TRIGGER tg_calcular_numero_ciclistas_de_equipo
    AFTER INSERT OR UPDATE
    ON public.ciclista
    FOR EACH ROW
    EXECUTE FUNCTION public.calcular_numero_ciclistas_de_equipo();
