

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



-- Create the main partitioned table
CREATE TABLE consumos (
    cliente_id INTEGER REFERENCES contratos(cliente_id) ON DELETE CASCADE,
    month INTEGER NOT NULL CHECK (month BETWEEN 1 AND 12), -- Month (1 = January, 12 = December)
    dia INTEGER NOT NULL CHECK (dia BETWEEN 1 AND 31), -- Day of the month
    horas DOUBLE PRECISION[] NOT NULL, -- Array of hourly consumption values (24 hours)
    PRIMARY KEY (cliente_id, month, dia)
) PARTITION BY LIST (month);

-- Create partitions for each month
CREATE TABLE consumos_jan PARTITION OF consumos FOR VALUES IN (1);
CREATE TABLE consumos_feb PARTITION OF consumos FOR VALUES IN (2);
CREATE TABLE consumos_mar PARTITION OF consumos FOR VALUES IN (3);
CREATE TABLE consumos_apr PARTITION OF consumos FOR VALUES IN (4);
CREATE TABLE consumos_may PARTITION OF consumos FOR VALUES IN (5);
CREATE TABLE consumos_jun PARTITION OF consumos FOR VALUES IN (6);
CREATE TABLE consumos_jul PARTITION OF consumos FOR VALUES IN (7);
CREATE TABLE consumos_aug PARTITION OF consumos FOR VALUES IN (8);
CREATE TABLE consumos_sep PARTITION OF consumos FOR VALUES IN (9);
CREATE TABLE consumos_oct PARTITION OF consumos FOR VALUES IN (10);
CREATE TABLE consumos_nov PARTITION OF consumos FOR VALUES IN (11);
CREATE TABLE consumos_dec PARTITION OF consumos FOR VALUES IN (12);






CREATE TABLE facturas (
    id SERIAL,
    cliente_id INTEGER REFERENCES clientes(id) ON DELETE CASCADE,
    month INTEGER NOT NULL CHECK (month BETWEEN 1 AND 12),
    total_mensual DOUBLE PRECISION NOT NULL,
    PRIMARY KEY (id, month)
) PARTITION BY LIST (month);

CREATE TABLE facturas_jan PARTITION OF facturas FOR VALUES IN (1);
CREATE TABLE facturas_feb PARTITION OF facturas FOR VALUES IN (2);
CREATE TABLE facturas_mar PARTITION OF facturas FOR VALUES IN (3);
CREATE TABLE facturas_apr PARTITION OF facturas FOR VALUES IN (4);
CREATE TABLE facturas_may PARTITION OF facturas FOR VALUES IN (5);
CREATE TABLE facturas_jun PARTITION OF facturas FOR VALUES IN (6);
CREATE TABLE facturas_jul PARTITION OF facturas FOR VALUES IN (7);
CREATE TABLE facturas_aug PARTITION OF facturas FOR VALUES IN (8);
CREATE TABLE facturas_sep PARTITION OF facturas FOR VALUES IN (9);
CREATE TABLE facturas_oct PARTITION OF facturas FOR VALUES IN (10);
CREATE TABLE facturas_nov PARTITION OF facturas FOR VALUES IN (11);
CREATE TABLE facturas_dec PARTITION OF facturas FOR VALUES IN (12);