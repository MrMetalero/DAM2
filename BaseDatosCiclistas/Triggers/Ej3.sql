
-- Para este ejercicio solamente debemos poner la relación de clave ajena
-- ATENCIÓN A ESTE EJERCCIO
ALTER TABLE puerto
ADD CONSTRAINT fk_etapa FOREIGN KEY (netapa) REFERENCES etapa(netapa)

