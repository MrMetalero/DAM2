SELECT nompuerto FROM puerto
WHERE puerto.altura > (
    SELECT AVG(puerto.altura) FROM puerto
)