-- Active: 1726053967925@@127.0.0.1@5432@ligamena




--m2 tiene un check de >=1000.
CREATE TABLE paises(
    nombre varchar PRIMARY KEY,
    m2 integer,
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
    fk_nivel_liga varchar,
    fk_nombre_pais_liga varchar,
    CONSTRAINT fk_dualpk_liga FOREIGN KEY (fk_nivel_liga,fk_nombre_pais_liga) REFERENCES ligas(nivel,fk_nombre_pais) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tecnicos(
    dni varchar PRIMARY KEY,
    nombre varchar NOT NULL
);


CREATE TABLE tecnico_pertenece(
    fk_dni_tecnico varchar,
    fk_nombre_equipo varchar,
    funcion varchar NOT NULL,
    CONSTRAINT pk_fk_dni_tecnico_fk_nombre_equipo PRIMARY KEY (fk_dni_tecnico,fk_nombre_equipo),
    CONSTRAINT fk_dni_tecnico_tecnico FOREIGN KEY (fk_dni_tecnico) REFERENCES tecnicos(dni) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_nombre_equipo_equipo FOREIGN KEY (fk_nombre_equipo) REFERENCES equipos(nombre) ON DELETE CASCADE ON UPDATE CASCADE
);





CREATE TABLE equiposborrados(
    id SERIAL PRIMARY KEY,
    fechaborrado date,
    nombre varchar,
    localidad varchar,
    anyofundacion date
);

--RI0: si existe un registro en la tabla liga con la id de un pais, ese pais en la tabla pais no se puede eliminar
--RI1: Cuando se borre un registro de la tabla Equipo, se deben almacear sus datos en la tabla equiposborrados








