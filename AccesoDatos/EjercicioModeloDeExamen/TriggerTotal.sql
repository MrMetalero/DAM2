--CASA
--EN INSERT
--
CREATE OR REPLACE FUNCTION herencia_total_entre_casa_y_vivienda()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM viviendas WHERE id_vivienda = OLD.id_casa)
    THEN 
    RAISE NOTICE 'NO PUEDES ELIMINAR ESTA CASA PORQUE TIENE RESTRICCIÓN TOTAL EN VIVIENDA (EXISTE UNA VIVIENDA CON ESTE CÓDIGO)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_entre_casa_y_vivienda
    BEFORE DELETE
    ON public.casas
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_entre_casa_y_vivienda();

--COMPRUBA SI HA BORRADO YA DE INMUEBLES EN UN TRIGGER DE BEFORE? --
--SI, BEFORE FUNCIONA --

DELETE  FROM casas WHERE id_casa = 'VIV-001'


DELETE  FROM ventas WHERE id_viviena = 'VIV-001'




--CHALE
--EN INSERT

CREATE OR REPLACE FUNCTION herencia_total_entre_chale_y_vivienda()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM viviendas WHERE id_vivienda = OLD.id_chales)
    THEN 
    RAISE NOTICE 'NO PUEDES ELIMINAR ESTE CHALE PORQUE TIENE RESTRICCIÓN TOTAL EN VIVIENDA (EXISTE UNA VIVIENDA CON ESTE CÓDIGO)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_entre_chale_y_vivienda
    BEFORE DELETE
    ON public.chales
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_entre_chale_y_vivienda();




