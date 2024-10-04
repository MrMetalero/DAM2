
CREATE OR REPLACE FUNCTION cursores_practica() 
RETURNS NULL
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
    DECLARE
    var_cuenta integer;
    var_dorsal integer;
    cur cursor FOR (SELECT dorsal, COUNT(*) c1 FROM llevar GROUP BY dorsal)  

    OPEN cur;
    FETCH cur.c1 INTO var_cuenta;
    LOOP
        IF (var_cuenta > FETCH cur.c1 INTO cuenta)
            THEN
            ELSE var_cuenta FETCH cur.c1 INTO var_c
            EXIT WHEN NOT FOUND;
        END IF;
    END LOOP 
   
END;
$body$; 


 -- NO SE PUEDE USAR "CREATE OR REPLACE" PORQUE PETA
CREATE TRIGGER tg_equipos_de_minimo_3_ciclistas
    AFTER INSERT OR UPDATE
    ON public.equipo
    FOR EACH ROW
    EXECUTE FUNCTION public.equipos_de_minimo_3_ciclistas();
