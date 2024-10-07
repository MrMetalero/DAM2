
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


-- e) Añade una nueva columna llamada premio en ciclista como un número entero DEFAULT 0
ALTER TABLE ciclista
ADD COLUMN premio INTEGER

-- f1)  El que ha ganado más etapas gana 5000€.
    --Para resetear el premio a 0 en todos
    UPDATE ciclista
    SET premio = 0


    UPDATE ciclista
    SET premio = premio + 5000
    WHERE dorsal IN (
    SELECT dorsal
    FROM (
        SELECT dorsal, COUNT(dorsal) AS cuentadorsal
        FROM etapa
        GROUP BY dorsal
    ) AS subquery
    WHERE cuentadorsal = (
        SELECT MAX(cuentadorsal)
        FROM (
            SELECT COUNT(dorsal) AS cuentadorsal
            FROM etapa
            GROUP BY dorsal
        ) AS inner_subquery
    )
);

-- f2)  El que ha ganado más puertos gana 3000€.
    UPDATE ciclista
    SET premio = premio + 3000
    WHERE dorsal IN (
    SELECT dorsal
    FROM (
        SELECT dorsal, COUNT(dorsal) AS cuentadorsal
        FROM puerto
        GROUP BY dorsal
    ) AS subquery
    WHERE cuentadorsal = (
        SELECT MAX(cuentadorsal)
        FROM (
            SELECT COUNT(dorsal) AS cuentadorsal
            FROM puerto
            GROUP BY dorsal
        ) AS inner_subquery
    )
);



-- f3)  El que ha llevado más veces algún mallot, gana 2000€.
    UPDATE ciclista
    SET premio = premio + 2000
    WHERE dorsal IN (
    SELECT dorsal
    FROM (
        SELECT dorsal, COUNT(codigo) AS cuentacodigo
        FROM llevar
        GROUP BY codigo, dorsal
    ) AS subquery
    WHERE cuentacodigo = (
        SELECT MAX(cuentacodigo2)
        FROM (
            SELECT COUNT(codigo) AS cuentacodigo2
            FROM llevar
            GROUP BY codigo, llevar.dorsal
        ) AS inner_subquery
    )
);



-- f4) Gana 100 € por cada etapa que haya ganado.        
UPDATE ciclista
SET premio = premio + (100)
WHERE dorsal = ANY(
SELECT dorsal FROM etapa
)

SELECT ciclista.dorsal as cDorsal, etapa.dorsal as eDorsal FROM ciclista FULL OUTER JOIN etapa
ON (ciclista.dorsal = etapa.dorsal)



-- f5) Gana 500 € el que gane el puerto con mayor altura     
UPDATE ciclista c1
SET premio = premio + (100)

SELECT * FROM ciclista
WHERE dorsal = ANY(
SELECT dorsal FROM etapa
)

--COMO HACERLO:
--USAR UN ALIAS PARA PODER REFERENCIAR EL UPDATE EN UNA SUBQUERY EN SET
UPDATE public.ciclista c0
SET premio = premio + 100 * (SELECT count(*) FROM ciclista c1 WHERE c0.dorsal = c1.dorsal)


