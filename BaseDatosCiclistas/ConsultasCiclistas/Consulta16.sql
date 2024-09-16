
SELECT netapa, salida FROM  etapa e1
WHERE netapa NOT IN (
    SELECT netapa FROM puerto
)

--maillot tiene tipo montaña


