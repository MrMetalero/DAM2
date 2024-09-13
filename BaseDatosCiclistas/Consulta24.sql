SELECT * FROM etapa AS e1 
WHERE EXISTS (SELECT * FROM puerto WHERE e1.netapa = puerto.netapa AND puerto.altura > 700)



SELECT DISTINCT p1.netapa  FROM puerto p1
WHERE NOT EXISTS (SELECT * FROM puerto p2 WHERE altura <= 700 AND p1.netapa = p2.netapa)
ORDER BY netapa