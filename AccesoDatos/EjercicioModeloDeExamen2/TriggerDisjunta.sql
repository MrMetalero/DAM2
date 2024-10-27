


--BEFORE INSERT IN MOUNTAIN_ETAPA


CREATE OR REPLACE FUNCTION herencia_disjunta_entre_mountain_y_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM contrarreloj WHERE contrarreloj.id_etapa = NEW.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES INSERTAR ESTA ETAPA DE MONTAÑA PORQUE TIENE RESTRICCIÓN DISJUNTA EN ETAPAS (NO PUEDE ESTAR EN AMBAS TABLAS MOUNTAIN Y CONTRARRELOJ)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_disjunta_entre_mountain_y_etapas
    BEFORE INSERT
    ON public.mountain_etapas
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_disjunta_entre_mountain_y_etapas();





--BEFORE INSERT IN CONTRARRELOJ


CREATE OR REPLACE FUNCTION herencia_disjunta_entre_contrarreloj_y_etapas()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM mountain_etapas WHERE mountain_etapas.id_etapa = NEW.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES INSERTAR ESTA ETAPA DE CONTRARRELOJ PORQUE TIENE RESTRICCIÓN DISJUNTA EN ETAPAS (NO PUEDE ESTAR EN AMBAS TABLAS MOUNTAIN Y CONTRARRELOJ)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_disjunta_entre_contrarreloj_y_etapas
    BEFORE INSERT
    ON public.contrarreloj
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_disjunta_entre_contrarreloj_y_etapas();









--BEFORE UPDATE IN MOUNTAIN_ETAPA

CREATE OR REPLACE FUNCTION herencia_disjunta_entre_mountain_y_etapas_update()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM contrarreloj WHERE contrarreloj.id_etapa = NEW.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES CAMBIAR ESTA ETAPA DE MONTAÑA PORQUE TIENE RESTRICCIÓN DISJUNTA EN ETAPAS (NO PUEDE ESTAR EN AMBAS TABLAS MOUNTAIN Y CONTRARRELOJ)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_disjunta_entre_mountain_y_etapas_update
    BEFORE UPDATE
    ON public.mountain_etapas
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_disjunta_entre_mountain_y_etapas_update();



    
--BEFORE UPDATE IN CONTRARRELOJ


CREATE OR REPLACE FUNCTION herencia_disjunta_entre_contrarreloj_y_etapas_update()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
DECLARE


BEGIN
    IF EXISTS (SELECT * FROM mountain_etapas WHERE mountain_etapas.id_etapa = NEW.id_etapa)
    THEN 
    RAISE NOTICE 'NO PUEDES CAMBIAR ESTA ETAPA CONTRARRELOJ PORQUE TIENE RESTRICCIÓN DISJUNTA EN ETAPAS (NO PUEDE ESTAR EN AMBAS TABLAS MOUNTAIN Y CONTRARRELOJ)';
        RETURN NULL;
    ELSE
        RETURN OLD;
    END IF;

END;
$body$;



CREATE OR REPLACE TRIGGER tg_herencia_disjunta_entre_contrarreloj_y_etapas_update
    BEFORE UPDATE
    ON public.contrarreloj
    FOR EACH ROW
    EXECUTE FUNCTION public.herencia_disjunta_entre_contrarreloj_y_etapas_update();

