SELECT *FROM etapa 
INNER JOIN puerto USING (netapa)

SELECT netapa FROM puerto 
WHERE puerto.altura > ANY (SELECT netapa, nompuerto FROM etapa 
INNER JOIN puerto USING (netapa) WHERE altura > 700)
