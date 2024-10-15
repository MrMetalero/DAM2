SELECT nombre FROM ciclista c1
WHERE edad = (
    SELECT MIN(edad) from ciclista)
