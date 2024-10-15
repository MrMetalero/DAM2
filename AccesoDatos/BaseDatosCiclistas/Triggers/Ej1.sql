ALTER TABLE ciclista
ADD CONSTRAINT edadCheck CHECK(edad >= 18)

ALTER TABLE ciclista
DROP CONSTRAINT edadCheck 

INSERT INTO ciclista VALUES (1,'Personaje Prueba', 15,'Banesto')

INSERT INTO ciclista VALUES (1,'Personaje Prueba', 18,'Banesto')
