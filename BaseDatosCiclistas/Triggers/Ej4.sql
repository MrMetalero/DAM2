ALTER TABLE etapa
ADD CONSTRAINT salida_llegada_diferentes CHECK(salida != llegada)
