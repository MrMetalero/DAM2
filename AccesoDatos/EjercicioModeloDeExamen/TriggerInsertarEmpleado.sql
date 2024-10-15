
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



BEGIN
INSERT INTO ventas (dni_cliente,dni_empleado,id_vivienda,nombre,precio_venta) VALUES ('VENTAEJEMPLO','VENTAEJEMPLO','VENTAEJEMPLO','VENTAEJEMPLO','VENTAEJEMPLO')
INSERT INTO empleados (dni_empleado,nombre) VALUES('EMPLEADO','EMPLEADO')
END;







