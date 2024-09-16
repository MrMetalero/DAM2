SELECT salida, llegada FROM etapa e1, puerto p1
WHERE e1.netapa = p1.netapa AND p1.pendiente = (
    SELECT MAX(pendiente) FROM puerto
)