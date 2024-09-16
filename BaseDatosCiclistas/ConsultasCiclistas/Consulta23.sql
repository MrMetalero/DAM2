
SELECT c1.nombre, COUNT(nombre) conta1 FROM maillot m1, llevar l1, ciclista c1, puerto p1
WHERE m1.codigo = l1.codigo AND c1.dorsal = l1.dorsal AND p1.dorsal = c1.dorsal
GROUP BY c1.nombre


-- OMITIDA PORQUE NO DEJA CLARO QUIEN COÑO GANA QUE COSA
-- SOY MALO EN DISEÑO PERO QUIERO MATAR AL DISEÑADOR XD