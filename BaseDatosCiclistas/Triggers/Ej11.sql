CREATE TABLE grupo(
    id_participantes PRIMARY KEY,
    nparticipantes INTEGER,
)

CREATE TABLE usuario_grupo(
    id_participantes INTEGER,
    nparticipantes INTEGER,

    CONSTRAINT pk_id_participantes PRIMARY KEY()
)

CREATE TABLE usuario(
    id_usuario PRIMARY KEY,
    nparticipantes INTEGER,
)



CREATE OR REPLACE FUNCTION contar_usuarios_en_grupos() 
RETURNS TRIGGER
LANGUAGE 'plpgsql'
COST 100
VOLATILE NOT LEAKPROOF
AS $body$
BEGIN
    

END;
$body$;



CREATE OR REPLACE TRIGGER tg_no_cambios_a_edad_menor
    BEFORE UPDATE
    ON public.ciclista
    FOR EACH ROW
    EXECUTE FUNCTION public.no_cambios_a_edad_menor();




