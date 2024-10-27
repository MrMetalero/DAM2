

--BEFORE DELETE IN MOUNTAIN_ETAPA


CREATE OR REPLACE FUNCTION herencia_total_entre_mountain_y_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM etapas WHERE numero_etapa = OLD.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES ELIMINAR ESTA ETAPA DE MONTAÑA PORQUE TIENE RESTRICCIÓN TOTAL EN ETAPAS (EXISTE UNA ETAPA CON ESTA ID)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_entre_mountain_y_etapas
    BEFORE DELETE
    ON public.mountain_etapas
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_entre_mountain_y_etapas();





--BEFORE DELETE IN CONTRARRELOJ


CREATE OR REPLACE FUNCTION herencia_total_entre_contrarreloj_y_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM etapas WHERE numero_etapa = OLD.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES ELIMINAR ESTA ETAPA DE MONTAÑA PORQUE TIENE RESTRICCIÓN TOTAL EN ETAPAS (EXISTE UNA ETAPA CON ESTA ID)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_entre_contrarreloj_y_etapas
    BEFORE DELETE
    ON public.contrarreloj
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_entre_contrarreloj_y_etapas();





--
--  BEFORE UPDATE 
--



--BEFORE UPDATE ON  MOUNTAIN


CREATE OR REPLACE FUNCTION herencia_total_update_entre_mountain_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN

    IF (PG_TRIGGER_DEPTH() > 1) --INDICA QUE AHORA MISMO HAY CASCADE TRIGGER U OTRO EN MARCHA (Parece peligroso)
    THEN RETURN NEW;
    
    ELSE

        IF EXISTS (SELECT * FROM casa WHERE id_casa = OLD.id_chales ) 
        THEN
        RAISE NOTICE 'NO PUEDES ACTUALIZAR ESTA ETAPA MONTAÑA PORQUE TIENE RESTRICCIÓN TOTAL EN ETAPAS (NO PUEDE QUEDAR UNA ETAPA EN AMBAS TABLAS CONTRARELOJ Y MOUNTAIN_ETAPA)';
            RETURN NULL;
        ELSE
            RETURN OLD;
        END IF;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_update_entre_mountain_etapas
    BEFORE UPDATE
    ON public.mountain_etapas
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_update_entre_mountain_etapas();



--BEFORE UPDATE ON  CONTRARRELOJ


CREATE OR REPLACE FUNCTION herencia_total_update_entre_contrarreloj_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN

    IF (PG_TRIGGER_DEPTH() > 1) --INDICA QUE AHORA MISMO HAY CASCADE TRIGGER U OTRO EN MARCHA (Parece peligroso)
    THEN RETURN NEW;
    
    ELSE

        IF EXISTS (SELECT * FROM casa WHERE id_casa = OLD.id_chales ) 
        THEN
        RAISE NOTICE 'NO PUEDES ACTUALIZAR ESTA ETAPA MONTAÑA PORQUE TIENE RESTRICCIÓN TOTAL EN ETAPAS (NO PUEDE QUEDAR UNA ETAPA EN AMBAS TABLAS CONTRARELOJ Y MOUNTAIN_ETAPA)';
            RETURN NULL;
        ELSE
            RETURN OLD;
        END IF;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_total_update_entre_contrarreloj_etapas
    BEFORE UPDATE
    ON public.contrarreloj
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_total_update_entre_contrarreloj_etapas();





