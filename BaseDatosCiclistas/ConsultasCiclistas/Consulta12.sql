SELECT equipo.nomeq, director FROM equipo
INNER JOIN ciclista ON equipo.nomeq = ciclista.nomeq
WHERE ciclista.edad > 33
GROUP BY equipo.nomeq, director
ORDER BY nomeq
