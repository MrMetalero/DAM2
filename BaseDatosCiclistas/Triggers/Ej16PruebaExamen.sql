
-- a) Se ha hecho la fk de ciclista-puerto

-- b) Se ha hecho not null el campo dorsal de puerto


-- c) No se puedan crear puertos con altura mayor de 5000. 
ALTER TABLE puerto ADD CHECK (altura <= 5000)






-- Que el ganador de un puerto no tenga más de 30 años

/*  
    B I P

COMPRUEBA QUE NO HAYA CICLISTAS CON MENOS DE 30 YEARS
*/

CREATE OR REPLACE FUNCTION no_mayor_30_anyos() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
    IF ( New.dorsal IN (SELECT dorsal FROM ciclista WHERE edad >=30))
        THEN RAISE NOTICE 'NO SE PERMITEN CICLISTAS DE MENOS DE 30 YEARS';
        RETURN NULL;
    ELSE 
        RETURN NEW;
    END IF;
END;
$body$; 


CREATE TRIGGER tg_no_mayor_30_anyos
    BEFORE INSERT OR UPDATE
    ON public.equipo
    FOR EACH ROW
    EXECUTE FUNCTION public.no_mayor_30_anyos();


--TRIGGER PARA CICLISTAS QUE NO DEJE MODIFICAR  EDAD
CREATE OR REPLACE FUNCTION no_modificar_edad() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN   
    IF (NEW.edad > 30)
    THEN RAISE NOTICE 'NO SE PUEDEN MODIFICAR LOS CICLISTAS';
    RETURN NULL; 
    ELSE RETURN NEW;
    END IF;
END;
$body$; 


CREATE TRIGGER tg_no_modificar_edad 
    BEFORE UPDATE
    ON public.ciclista
    FOR EACH ROW
    EXECUTE FUNCTION public.no_modificar_edad() ;

-- d) Que el ganador de un puerto haya ganado, como mínimo, una etapa
CREATE OR REPLACE FUNCTION minimo_una_etapa_ganada() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN   
    IF ( NEW.dorsal NOT IN (SELECT DISTINCT dorsal FROM etapa))
    THEN RAISE NOTICE 'NO SE PUEDE GANAR UN PUERTO SIN GANAR UNA ETAPA';
    RETURN NULL; 
    ELSE RETURN NEW;
    END IF;
END;
$body$; 


CREATE TRIGGER tg_minimo_una_etapa_ganada 
    BEFORE INSERT
    ON public.puerto
    FOR EACH ROW
    EXECUTE FUNCTION public.minimo_una_etapa_ganada() ;


-- e) Añade una nueva columna llamada premio en ciclista como un número entero
ALTER TABLE ciclista
ADD COLUMN premio INTEGER

-- f1)  El que ha ganado más etapas gana 5000€.
SELECT dorsal, COUNT(*) c1 FROM etapa
GROUP BY dorsal
ORDER BY c1 DESC
LIMIT 1


WITH vistaConteoPorDorsal AS (
        SELECT  dorsal, COUNT(*) as cuenta FROM etapa
        GROUP BY dorsal
    )
    SELECT MAX(cuenta),dorsal FROM vistaConteoPorDorsal
    GROUP BY dorsal

