SELECT AVG(edad) FROM ciclista c1
WHERE c1.dorsal IN(
    SELECT e1.dorsal FROM etapa e1
    INNER JOIN llevar USING(netapa)
    INNER JOIN maillot USING(codigo)
    )
