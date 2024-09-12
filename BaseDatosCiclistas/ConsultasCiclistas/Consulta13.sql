SELECT ciclista.nombre, color FROM ciclista 
INNER JOIN llevar ON ciclista.dorsal = llevar.dorsal
INNER JOIN maillot ON maillot.codigo = llevar.codigo
GROUP BY ciclista.nombre, color
ORDER BY nombre