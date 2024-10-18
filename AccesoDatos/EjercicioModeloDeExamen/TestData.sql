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
('VIV-001', 'Calle Falsa 123, Madrid', 80.5),
('VIV-002', 'Avenida Siempre Viva 456, Barcelona', 120.0),
('VIV-003', 'Plaza Mayor 789, Valencia', 95.0),
('VIV-004', 'Camino del Sol 101, Sevilla', 70.0);

-- Insert test data into casas
INSERT INTO casas (id_casa, localizacion_ciudad) VALUES
('VIV-001', 'Madrid'),
('VIV-002', 'Barcelona');


-- Insert test data into chales
INSERT INTO chales (id_chale, precio_estimado) VALUES
('VIV-003', 250000.00),
('VIV-004', 300000.00);


-- Insert test data into ventas
INSERT INTO ventas (dni_cliente, id_vivienda, dni_empleado, precio_venta) VALUES
('12345678A', 'VIV-001', '98765432A', 200000.00),
('23456789B', 'VIV-002', '87654321B', 350000.00),
('34567890C', 'VIV-003', '76543210C', 280000.00),
('45678901D', 'VIV-004', '98765432A', 180000.00);