SELECT nombre FROM ciclista AS C1
WHERE (SELECT COUNT(*) FROM puerto WHERE C1.dorsal = puerto.dorsal)>1


