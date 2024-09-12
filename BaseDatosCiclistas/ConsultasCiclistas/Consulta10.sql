SELECT nompuerto, categoria FROM puerto
INNER JOIN ciclista USING (dorsal)
INNER JOIN equipo USING (nomeq)
INNER JOIN llevar USING (dorsal)
INNER JOIN maillot USING (codigo)
WHERE nomeq = 'Banesto'
GROUP BY nompuerto, categoria
