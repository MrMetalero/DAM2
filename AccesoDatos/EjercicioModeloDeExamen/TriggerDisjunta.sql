
--CASA
--
--

CREATE OR REPLACE FUNCTION disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_casa()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM chales WHERE id_chale = NEW.id_casa)
    THEN 
    RAISE NOTICE 'NO PUEDES INSERTAR UNA CASA QUE YA ES UN CHALE';
        RETURN NULL;
    ELSE
        RETURN NEW;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_casa
    BEFORE INSERT OR UPDATE
    ON public.casas
    FOR EACH ROW
    EXECUTE FUNCTION public.disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_casa();


--CHALÉ
--
--

CREATE OR REPLACE FUNCTION disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_chale()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM casas WHERE id_casa = NEW.id_chale)
    THEN 
    RAISE NOTICE 'NO PUEDES INSERTAR UN CHALE QUE YA ES UNA CASA';
        RETURN NULL;
    ELSE
        RETURN NEW;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_chale
    BEFORE INSERT OR UPDATE
    ON public.chales
    FOR EACH ROW
    EXECUTE FUNCTION public.disjunta_idinmueble_no_estar_en_chales_y_casas_a_la_vez_chale();




