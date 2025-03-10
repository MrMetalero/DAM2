-- Active: 1727983525436@@127.0.0.1@5432@ligamena

--LOS DEBUGS DETALLADOS LOS HE BUSCADO PORQUE ME SALIAN UNOS MUY POCHOS Y ESTOS SON MAS CLAROS
-- AL INSERTAR UN EQUIPO
CREATE OR REPLACE FUNCTION calcular_numequipos_insert()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
AS $body$
BEGIN
    UPDATE ligas 
    SET numequipos = numequipos + 1 
    WHERE NEW.fk_nivel_liga = ligas.nivel 
      AND NEW.fk_nombre_pais_liga = ligas.fk_nombre_pais;

    RAISE NOTICE 'Equipo agregado. Actualizado numequipos en la liga % - %: % equipos', 
                 NEW.fk_nivel_liga, NEW.fk_nombre_pais_liga, 
                 (SELECT numequipos FROM ligas WHERE nivel = NEW.fk_nivel_liga AND fk_nombre_pais = NEW.fk_nombre_pais_liga);

    RETURN NEW;
END;
$body$;

CREATE OR REPLACE TRIGGER tg_calcular_numequipos_insert
    AFTER INSERT ON public.equipos
    FOR EACH ROW
    EXECUTE FUNCTION public.calcular_numequipos_insert();


-- AL ELIMINAR UN EQUIPO
CREATE OR REPLACE FUNCTION calcular_numequipos_delete()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
AS $body$
BEGIN
    UPDATE ligas 
    SET numequipos = numequipos - 1 
    WHERE OLD.fk_nivel_liga = ligas.nivel 
      AND OLD.fk_nombre_pais_liga = ligas.fk_nombre_pais;

    RAISE NOTICE 'Equipo eliminado. Actualizado numequipos en la liga % - %: % equipos', 
                 OLD.fk_nivel_liga, OLD.fk_nombre_pais_liga, 
                 (SELECT numequipos FROM ligas WHERE nivel = OLD.fk_nivel_liga AND fk_nombre_pais = OLD.fk_nombre_pais_liga);

    RETURN OLD;
END;
$body$;

CREATE OR REPLACE TRIGGER tg_calcular_numequipos_delete
    AFTER DELETE ON public.equipos
    FOR EACH ROW
    EXECUTE FUNCTION public.calcular_numequipos_delete();


-- AL ACTUALIZAR UN EQUIPO
CREATE OR REPLACE FUNCTION calcular_numequipos_update()
RETURNS TRIGGER
LANGUAGE 'plpgsql'
AS $body$
BEGIN
    IF NEW.fk_nivel_liga != OLD.fk_nivel_liga OR NEW.fk_nombre_pais_liga != OLD.fk_nombre_pais_liga THEN
        UPDATE ligas 
        SET numequipos = numequipos + 1 
        WHERE NEW.fk_nivel_liga = ligas.nivel 
          AND NEW.fk_nombre_pais_liga = ligas.fk_nombre_pais;

        RAISE NOTICE 'Equipo movido a nueva liga. Actualizado numequipos en la liga % - %: % equipos', 
                     NEW.fk_nivel_liga, NEW.fk_nombre_pais_liga, 
                     (SELECT numequipos FROM ligas WHERE nivel = NEW.fk_nivel_liga AND fk_nombre_pais = NEW.fk_nombre_pais_liga);

        UPDATE ligas 
        SET numequipos = numequipos - 1 
        WHERE OLD.fk_nivel_liga = ligas.nivel 
          AND OLD.fk_nombre_pais_liga = ligas.fk_nombre_pais;

        RAISE NOTICE 'Equipo eliminado de la liga anterior. Actualizado numequipos en la liga % - %: % equipos', 
                     OLD.fk_nivel_liga, OLD.fk_nombre_pais_liga, 
                     (SELECT numequipos FROM ligas WHERE nivel = OLD.fk_nivel_liga AND fk_nombre_pais = OLD.fk_nombre_pais_liga);
    END IF;

    RETURN NEW;
END;
$body$;

CREATE OR REPLACE TRIGGER tg_calcular_numequipos_update
    AFTER UPDATE ON public.equipos
    FOR EACH ROW
    EXECUTE FUNCTION public.calcular_numequipos_update();
