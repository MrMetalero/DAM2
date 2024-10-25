INSERT INTO clientes (dni_cliente, nombre, telefono) VALUES
('12345678A', 'Juan Pérez', '612345678'),
('23456789B', 'Ana Gómez', '623456789'),
('34567890C', 'Luis Martínez', '634567890'),
('45678901D', 'María López', '645678901');

-- Insert test data into empleados
INSERT INTO empleados (dni_empleado, nombre, telefono) VALUES
('98765432A', 'Carlos Ruiz', '756789012'),
('87654321B', 'Sofia Torres', '767890123'),
('76543210C', 'Fernando Díaz', '778901234');

-- Insert test data into viviendas
INSERT INTO viviendas (id_vivienda, direccion, m2) VALUES
('VIV-005', 'Calle Falsa 123, Madrid', 80.5),
('VIV-006', 'Avenida Siempre Viva 456, Barcelona', 120.0),
('VIV-007', 'Plaza Mayor 789, Valencia', 95.0),
('VIV-008', 'Camino del Sol 101, Sevilla', 70.0);

-- Insert test data into casas
INSERT INTO casas (id_casa, localizacion_ciudad) VALUES
('VIV-005', 'Madrid'),
('VIV-006', 'Barcelona');


-- Insert test data into chales
INSERT INTO chales (id_chale, precio_estimado) VALUES
('VIV-007', 250000.00),
('VIV-008', 300000.00);


-- Insert test data into ventas
INSERT INTO ventas (dni_cliente, id_vivienda, dni_empleado, precio_venta) VALUES
('45678901D', 'VIV-004', '98765432A', 180000.00);