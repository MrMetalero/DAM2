SELECT netapa, salida FROM etapa e1
WHERE netapa NOT IN (
    SELECT * FROM etapa
    INNER JOIN llevar USING (netapa)
    INNER JOIN maillot USING (codigo) 
    WHERE tipo LIKE 'Montaña'
)



--maillot tiene tipo montaña


