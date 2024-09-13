SELECT DISTINCT ciclista.nombre, etapa.netapa FROM ciclista
INNER JOIN etapa USING (dorsal)
INNER JOIN llevar USING (dorsal)
INNER JOIN maillot USING (codigo)
WHERE llevar.codigo = maillot.codigo AND maillot.color = 'Amarillo'




-- OMITIDO PORQUE ES UNA MIERDA--