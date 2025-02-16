-- Active: 1727983525436@@127.0.0.1@5432@facturaluz


CREATE TABLE clientes (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL
);

CREATE TABLE contratos (
    cliente_id INTEGER REFERENCES clientes(id) ON DELETE CASCADE,
    fecha_renovacion DATE NOT NULL,
    PRIMARY KEY (cliente_id) 
);


CREATE TABLE consumos_enero (
    cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
    horas DOUBLE PRECISION[] NOT NULL, 
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);


CREATE TABLE consumos_febrero (
    cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
    horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_marzo (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_abril (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_mayo (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_junio (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_julio (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_agosto (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_septiembre (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_octubre (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_noviembre (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_diciembre (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);

CREATE TABLE consumos_diciembre (
         cliente_id INTEGER,
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31),
     horas DOUBLE PRECISION[] NOT NULL,  
    FOREIGN KEY (cliente_id) REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    PRIMARY KEY (cliente_id, dia)
);