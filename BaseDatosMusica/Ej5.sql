--Crea una restricción que evite que se inserten más de 20 artistas por grupo.




/*
    AFTER INSERT ON PERTENECE 

*/



CREATE OR REPLACE FUNCTION evitar_mas_20_artistas_por_grupo()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE
    cuenta_artista_por_grupo INTEGER = (SELECT COUNT(*) FROM pertence WHERE cod = NEW.cod GROUP BY cod);
BEGIN
    IF (cuenta_artista_por_grupo > 4)
    THEN 
        RAISE EXCEPTION 'NO SE PUEDE TENER MÁS DE 20 ARTISTAS';
        RETURN NULL;
    ELSE
        RETURN NEW;
    END IF;

END;
$body$;



CREATE CONSTRAINT TRIGGER tg_evitar_mas_20_artistas_por_grupo
    AFTER INSERT
    ON public.pertence
    DEFERRABLE INITIALLY DEFERRED
    FOR EACH ROW
    EXECUTE FUNCTION public.evitar_mas_20_artistas_por_grupo();


INSERT INTO pertence VALUES('233849384',6,'PRUEBAMAX');

--PARA COMPROBAR QUE LA SINTAXIS DE LA CUENTA ES CORRECTA
SELECT COUNT(*) FROM pertence WHERE cod = '6' GROUP BY cod

