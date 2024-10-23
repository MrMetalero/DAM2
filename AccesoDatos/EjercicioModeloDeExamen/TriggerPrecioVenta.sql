

CREATE OR REPLACE FUNCTION no_vender_por_menos_de_precio()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE

BEGIN
    IF EXISTS (SELECT * FROM chales WHERE NEW.precio_venta < precio_estimado AND id_vivienda = NEW.id_vivienda)
    THEN 
        RAISE NOTICE 'NO SE PUEDE VENDER POR ESTE PRECIO';
        RETURN NULL;
    ELSE
        RETURN NEW;
    END IF;

END;
$body$;



CREATE TRIGGER tg_no_vender_por_menos_de_precio
    BEFORE INSERT OR UPDATE
    ON public.ventas
    FOR EACH ROW
    EXECUTE FUNCTION public.no_vender_por_menos_de_precio();



