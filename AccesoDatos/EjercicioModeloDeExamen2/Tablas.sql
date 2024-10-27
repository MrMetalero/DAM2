-- Active: 1727983525436@@127.0.0.1@5432@modelo2examen
CREATE DATABASE modelo2Examen



CREATE TABLE equipos (
    id_equipo VARCHAR(9) PRIMARY KEY,
    nombre_equipo VARCHAR(25) NOT NULL,
    marca VARCHAR(25) NOT NULL,
    nacionalidad VARCHAR(50) NOT NULL,
    presupuesto DOUBLE PRECISION NOT NULL
);

CREATE TABLE participantes (
    id_participante VARCHAR(9) PRIMARY KEY,
    pertenece_a_equipo VARCHAR(25) NOT NULL,
    apellidos VARCHAR(25) NOT NULL,
    dorsal VARCHAR(4) NOT NULL,
    nombre VARCHAR(25) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    CONSTRAINT fk_pertenece_id_equipo FOREIGN KEY (pertenece_a_equipo) REFERENCES equipos(id_equipo)
);


CREATE TABLE etapas (
    numero_etapa VARCHAR(5) PRIMARY KEY,
    origen VARCHAR(20) NOT NULL,
    destino VARCHAR(20) NOT NULL,
    distancia INT NOT NULL
);

CREATE TABLE ganadores_etapas (
    id_participante VARCHAR(9) NOT NULL,
    numero_etapa VARCHAR(5) NOT NULL,
    tiempo DOUBLE PRECISION NOT NULL,
    CONSTRAINT pk_id_participante_numero_etapa PRIMARY KEY (id_participante, numero_etapa),
    CONSTRAINT fk_id_participante_participantes_id_participante FOREIGN KEY (id_participante) REFERENCES participantes(id_participante),
    CONSTRAINT fk_numero_etapa_etapas_numero_etapa FOREIGN KEY (numero_etapa) REFERENCES etapas(numero_etapa)
);

CREATE TABLE mountain_etapas (
    id_etapa VARCHAR(5) PRIMARY KEY,
    pendiente INT NOT NULL,
    CONSTRAINT fk_id_etapa_etapas_numero_etapa FOREIGN KEY (id_etapa) REFERENCES etapas(numero_etapa)
);

CREATE TABLE contrarreloj (
    id_etapa VARCHAR(5) PRIMARY KEY,
    CONSTRAINT fk_id_etapa_etapas_numero_etapa FOREIGN KEY (id_etapa) REFERENCES etapas(numero_etapa)
);

CREATE TABLE puertos (
    id_puerto VARCHAR(5) PRIMARY KEY,
    nombre_puerto VARCHAR(25) NOT NULL,
    id_mountain_etapa VARCHAR(5) NOT NULL,
    FOREIGN KEY (id_mountain_etapa) REFERENCES mountain_etapas(id_etapa)
);




