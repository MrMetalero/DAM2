-- Active: 1727983525436@@127.0.0.1@5432@ligamena

--LAS RESTRICCIONES QUE SE DEBÍAN DE COMPROBAR:
--RI0: si existe un registro en la tabla liga con la id de un pais, ese pais en la tabla pais no se puede eliminar
--RI1: Cuando se borre un registro de la tabla Equipo, se deben almacear sus datos en la tabla equiposborrados
--R2: m2 no puede ser inferior a 1000
--R3:Si se elimina una liga deben eliminarse también todos sus equipos
--R4: No puede haber mas de X registros en la tabla de tecnico_pertenece


CREATE DATABASE ligamena;



--SE QUITA EL BORRADO EN CASCADA DE LA TABLA paises para que nos de error al borrar un registro del que dependen FK de otras tablas
/*
    EJ:
    SQL: DELETE FROM "paises" WHERE "nombre"='Spain'

    update or delete on table "paises" violates foreign key constraint "fk_nombre_pais_pais" on table "ligas"

*/
--m2 tiene un check de >=1000.
CREATE TABLE paises(
    nombre varchar PRIMARY KEY,
    m2 integer NOT NULL,
    CONSTRAINT paises_m2_check CHECK ((m2 >= 1000))

);

--Dependencia de Identificación de Pais
CREATE TABLE ligas(
    nivel varchar,
    numequipos integer NOT NULL DEFAULT 0, --Para campo calculado
    fk_nombre_pais varchar NOT NULL,
    CONSTRAINT pk_nivel_fk_nombre_pais PRIMARY KEY (nivel,fk_nombre_pais) ,
    CONSTRAINT fk_nombre_pais_pais FOREIGN KEY (fk_nombre_pais) REFERENCES paises(nombre) --Dependencia resuelta
);

CREATE TABLE equipos(
    nombre varchar PRIMARY KEY ,
    localidad varchar NOT NULL,
    anyofundacion date NOT NULL,
    fk_nivel_liga varchar NOT NULL,
    fk_nombre_pais_liga varchar NOT NULL,
    CONSTRAINT fk_dualpk_liga FOREIGN KEY (fk_nivel_liga,fk_nombre_pais_liga) REFERENCES ligas(nivel,fk_nombre_pais) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tecnicos(
    dni varchar PRIMARY KEY,
    nombre varchar NOT NULL
);


CREATE TABLE tecnico_pertenece(
    fk_dni_tecnico varchar NOT NULL,
    fk_nombre_equipo varchar NOT NULL,
    funcion varchar NOT NULL,
    CONSTRAINT pk_fk_dni_tecnico_fk_nombre_equipo PRIMARY KEY (fk_dni_tecnico,fk_nombre_equipo),
    CONSTRAINT fk_dni_tecnico_tecnico FOREIGN KEY (fk_dni_tecnico) REFERENCES tecnicos(dni) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_nombre_equipo_equipo FOREIGN KEY (fk_nombre_equipo) REFERENCES equipos(nombre) ON DELETE CASCADE ON UPDATE CASCADE
);





CREATE TABLE equiposborrados(
    id SERIAL PRIMARY KEY,
    fechaborrado date NOT NULL,
    nombre varchar NOT NULL,
    localidad varchar NOT NULL,
    anyofundacion date NOT NULL
);









