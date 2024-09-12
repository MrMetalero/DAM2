SELECT puerto.nompuerto, etapa.netapa, etapa.km FROM puerto
INNER JOIN etapa USING (netapa)

