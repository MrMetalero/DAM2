-- Active: 1727983525436@@127.0.0.1@5432@inmobiliaria
CREATE DATABASE inmobiliaria

CREATE TABLE clientes(
    dni_cliente VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    telefono VARCHAR(12) NOT NULL
);

CREATE TABLE empleados(
    dni_empleado VARCHAR(9) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE viviendas(
    id_vivienda VARCHAR(255) PRIMARY KEY, 
    direccion VARCHAR(255) NOT NULL,
    m2 FLOAT(10) NOT NULL    
);

CREATE TABLE casas(
    id_casa VARCHAR(255) PRIMARY KEY,
    localizacion_ciudad VARCHAR(255) NOT NULL,
    CONSTRAINT fk_id_casa_apunta_id_vivienda FOREIGN KEY (id_casa) REFERENCES vivienda(id_vivienda)
);

CREATE TABLE chales(
    id_chale VARCHAR(255) PRIMARY KEY,
    precio_estimado FLOAT(9),
    CONSTRAINT fk_id_chale_apunta_id_vivienda FOREIGN KEY (id_chale) REFERENCES vivienda(id_vivienda)
);

CREATE TABLE ventas(
    dni_cliente VARCHAR(9) NOT NULL,
    id_vivienda VARCHAR(9) NOT NULL,
    dni_empleado VARCHAR(9) NOT NULL,
    precio_venta FLOAT(9) NOT NULL,
    CONSTRAINT pk_dni_cliente_id_vivienda PRIMARY KEY(dni_cliente,id_vivienda),
    CONSTRAINT fk_dni_cliente_apunta_cliente FOREIGN KEY (dni_cliente) REFERENCES clientes(dni_cliente),
    CONSTRAINT fk_id_vivienda_apunta_vivienda FOREIGN KEY (id_vivienda) REFERENCES viviendas(id_vivienda),
    CONSTRAINT fk_id_empleado_apunta_empleado FOREIGN KEY (dni_empleado) REFERENCES empleados(dni_empleado)
);

