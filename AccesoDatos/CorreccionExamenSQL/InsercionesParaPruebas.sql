-- Active: 1727983525436@@127.0.0.1@5432@ligamena


INSERT INTO "paises"("nombre","m2") VALUES
    ('Senegal',2312),
    ('Brasil',2312),
    ('France',2312),
    ('Spain',2312),
    ('Germany',2312),
    ('Italy',2312);


INSERT INTO "ligas" ("nivel","fk_nombre_pais") VALUES
    ('1','Spain'),
    ('2','Spain'),
    ('3','Spain'),
    ('4','Spain');


INSERT INTO  "equipos" ("nombre", "localidad", "anyofundacion", "fk_nivel_liga","fk_nombre_pais_liga") VALUES
    ('FC1','localidad1','12/5/1997',1,'Spain'),
    ('FC2','localidad2','12/5/1997',2,'Spain'),
    ('FC3','localidad3','12/5/1997',3,'Spain'),
    ('FC4','localidad1','12/5/1997',1,'Spain'),
    ('FC5','localidad2','12/5/1997',2,'Spain'),
    ('FC6','localidad3','12/5/1997',3,'Spain');

INSERT INTO  "tecnicos" ("dni","nombre") VALUES
    ('1','Jose'),
    ('2','Marta'),
    ('3','Carlos'),
    ('4','Raul'),
    ('5','Javier'),
    ('6', 'Lucia'),
    ('7', 'Andres'),
    ('8', 'Elena'),
    ('9', 'Sergio'),
    ('10', 'Natalia'),
    ('11', 'Pablo');

INSERT INTO  "tecnico_pertenece" ("fk_dni_tecnico","fk_nombre_equipo","funcion") VALUES
    ('1','FC2','Fun1'),
    ('2','FC5','Fun2'),
    ('3','FC3','Fun1'),
    ('4','FC2','Fun2'),
    ('5','FC2','Fun3'),
    ('6','FC2','Fun1'),
    ('7','FC2','Fun1'),
    ('8','FC2','Fun1'),
    ('9','FC2','Fun1'),
    ('10','FC2','Fun1'),
    ('11','FC2','Fun1');
  

    --TEST DE TÉCNICOS MAX 9 CÓMODO

    INSERT INTO tecnicos (dni, nombre) VALUES
    ('1', 'Jose'),
    ('2', 'Marta'),
    ('3', 'Carlos'),
    ('4', 'Raul'),
    ('5', 'Javier'),
    ('6', 'Elena'),
    ('7', 'Fernando'),
    ('8', 'Ana'),
    ('9', 'Lucia'),
    ('10', 'Manuel'),
    ('11', 'Sergio');


INSERT INTO equipos (nombre, localidad, anyofundacion, fk_nivel_liga, fk_nombre_pais_liga) VALUES
    ('FC1', 'Madrid', '1920-01-01', '1', 'Spain'),
    ('FC2', 'Barcelona', '1900-02-02', '2', 'Spain');


INSERT INTO tecnico_pertenece (fk_dni_tecnico, fk_nombre_equipo, funcion) VALUES
    ('1', 'FC1', 'Entrenador'),
    ('2', 'FC1', 'Asistente'),
    ('3', 'FC1', 'Médico'),
    ('4', 'FC1', 'Preparador Físico'),
    ('5', 'FC1', 'Analista'),
    ('6', 'FC1', 'Entrenador de Porteros'),
    ('7', 'FC1', 'Delegado'),
    ('8', 'FC1', 'Nutricionista'),
    ('9', 'FC1', 'Psicólogo');

