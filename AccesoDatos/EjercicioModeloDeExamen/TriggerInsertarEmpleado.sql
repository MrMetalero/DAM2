
CREATE OR REPLACE FUNCTION no_insertar_en_empleado_si_no_hay_venta_con_dniempleado()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE

BEGIN
    IF EXISTS (SELECT * FROM ventas WHERE dni_empleado = NEW.dni_empleado)
    THEN 
        RETURN NEW;
    ELSE
        RAISE EXCEPTION 'NO SE PUEDE INTRODUCIR ESTE EMPLEADO SIN UNA VENTA';
        RETURN NULL;
    END IF;

END;
$body$;



CREATE CONSTRAINT TRIGGER no_insertar_en_empleado_si_no_hay_venta_con_dniempleado
    AFTER INSERT OR UPDATE
    ON public.empleados
    DEFERRABLE INITIALLY DEFERRED
    FOR EACH ROW
    EXECUTE FUNCTION public.no_insertar_en_empleado_si_no_hay_venta_con_dniempleado();


-- INTENTANDO INSERTAR UN EMPLEADO SIN VENTA (OBVIAMENTE NO FUNCIONA)
INSERT INTO empleados (dni_empleado,nombre) VALUES('22222222B','EMPLEADO2');

--TRANSACCIÓN DE UNA VENTA CON UN EMPLEADO NUEVO CREADO cuando se inserta una venta
BEGIN

INSERT INTO empleados (dni_empleado,nombre) VALUES('11111111E','EMPLEADO');
INSERT INTO ventas (dni_cliente,dni_empleado,id_vivienda,precio_venta) VALUES ('12345678A','11111111E','VIV-001',2344.43);

END;


--TRANSACCIÓN 2 DE EJEMPLO
BEGIN

INSERT INTO empleados (dni_empleado,nombre) VALUES('22222222E','EMPLEADO2');
INSERT INTO ventas (dni_cliente,dni_empleado,id_vivienda,precio_venta) VALUES ('23456789B','22222222E','VIV-002',2000);

END;


-- 12345678A	Juan Pérez	612345678









