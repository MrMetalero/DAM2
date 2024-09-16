SELECT nombre FROM ciclista c1 INNER JOIN etapa USING (dorsal)
WHERE edad = (
    SELECT MIN(edad) from ciclista c1, etapa e1, llevar l1, maillot m1
    WHERE c1.dorsal = e1.dorsal AND e1.netapa = l1.netapa
    AND l1.codigo = m1.codigo )
    
