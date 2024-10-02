CREATE OR REPLACE FUNCTION anyos_ciclista() 
RETURNS int AS $body$
BEGIN
    UPDATE public.ciclista
    SET edad=edad+1 WHERE dorsal NOT IN (SELECT dorsal FROM etapa);

    UPDATE public.ciclista
    SET edad=edad-1 WHERE dorsal NOT IN (SELECT dorsal  FROM etapa GROUP BY dorsal HAVING COUNT(dorsal) > 1);

    UPDATE public.ciclista
    SET edad=edad+1000 
    WHERE dorsal IN 
    (SELECT dorsal, COUNT(*) c1 FROM llevar
    GROUP BY dorsal
    ORDER BY c1 DESC
    LIMIT 1);




END;
$body$ LANGUAGE plpgsql;

--ciclistas que han llevado más que nadie un maillot independiente de color
SELECT MAX(SELECT dorsal, COUNT(*)  FROM llevar
GROUP BY dorsal)

--ESTO AGRUPA LA CUENTA DE REGISTROS POR DORSAL. CÓDIGO TAMBIÉN IDENTIFICA EL COLOR
SELECT dorsal, COUNT(*) c1  FROM llevar
GROUP BY dorsal
ORDER BY c1 DESC
LIMIT 1

--CICLISTA QUE LLEVO EL MÁXIMO NÚMERO DE VECES UN MAILLOT EN PARTICULAR
SELECT dorsal,  COUNT(*) c1, codigo FROM llevar
GROUP BY dorsal, llevar.codigo
ORDER BY c1 DESC






SELECT dorsal  FROM etapa 
GROUP BY dorsal
HAVING COUNT(dorsal) > 1 

