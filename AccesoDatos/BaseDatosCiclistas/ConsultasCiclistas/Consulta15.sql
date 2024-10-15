SELECT e1.netapa as e1Netapa, e2.netapa AS e2Netapa, e1.llegada as e1Llegada, e2.salida as e2Salida FROM etapa AS e1, etapa AS e2
WHERE e1.llegada != e2.salida AND e1.netapa +1 = e2.netapa


--RESULTADO
SELECT e2.netapa FROM etapa AS e1, etapa AS e2
WHERE e1.llegada != e2.salida AND e1.netapa +1 = e2.netapa
