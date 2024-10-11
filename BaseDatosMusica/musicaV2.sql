CREATE





CREATE TABLE artista (
  dni VARCHAR(10) NOT NULL, 
  nombre VARCHAR(30) NOT NULL, 
  PRIMARY KEY (dni)
) ;


INSERT INTO artista (dni, nombre) VALUES ('1111111111', 'Adrian Lee');
INSERT INTO artista (dni, nombre) VALUES ('1111111112', 'Adam Clayton');
INSERT INTO artista (dni, nombre) VALUES ('1111111113', 'Bono');
INSERT INTO artista (dni, nombre) VALUES ('1111111114', 'C. Burchill');
INSERT INTO artista (dni, nombre) VALUES ('1111114444', 'Carlos Torero');
INSERT INTO artista (dni, nombre) VALUES ('2345678444', 'Edge');
INSERT INTO artista (dni, nombre) VALUES ('3232456547', 'Phil Collins');
INSERT INTO artista (dni, nombre) VALUES ('3333567898', 'Santiago Auseron');
INSERT INTO artista (dni, nombre) VALUES ('3454677777', 'Jim Kerr');
INSERT INTO artista (dni, nombre) VALUES ('4444444444', 'Larry Jr.Mullen');
INSERT INTO artista (dni, nombre) VALUES ('4454321111', 'Luis Auseron');
INSERT INTO artista (dni, nombre) VALUES ('5454532222', 'Paul Young');
INSERT INTO artista (dni, nombre) VALUES ('5555678976', 'Enrique Sierra');
INSERT INTO artista (dni, nombre) VALUES ('5556787777', 'J.L. Giménez');
INSERT INTO artista (dni, nombre) VALUES ('5656378999', 'Soledad Giménez');
INSERT INTO artista (dni, nombre) VALUES ('6666667885', 'Nacho Maño');
INSERT INTO artista (dni, nombre) VALUES ('7654323234', 'P. van Hooke');
INSERT INTO artista (dni, nombre) VALUES ('7876543428', 'Tony Banks');
INSERT INTO artista (dni, nombre) VALUES ('8884566666', 'M. Rutherford');



CREATE TABLE cancion (
  cod INTEGER NOT NULL, 
  titulo VARCHAR(30) NOT NULL, 
  duracion DOUBLE PRECISION NULL, 
  PRIMARY KEY (cod)
) ;


INSERT INTO cancion (cod, titulo, duracion) VALUES (1, '20th Century Promise', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (2, '37 grados', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (3, '4th of July', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (4, '7 Deadly Sins', 6);
INSERT INTO cancion (cod, titulo, duracion) VALUES (5, 'A cara o cruz', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (6, 'A sort of homecoming', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (7, 'Afterglow', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (8, 'Al atardecer', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (9, 'Al sur', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (10, 'Alive And Kicking', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (11, 'All The things She..', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (12, 'Alma de blues', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (13, 'And The Band ...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (14, 'Andas junto a mí', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (15, 'Annabel Lee', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (16, 'Anything she does', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (17, 'Artitoestoy', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (18, 'Asoma el llanto', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (19, 'Babyface', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (20, 'Bad', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (21, 'Barbara del campo', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (22, 'Beautiful day', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (23, 'Before', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (24, 'Black and blue', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (25, 'Blame', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (26, 'Book of Brilliant...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (27, 'Brazilian', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (28, 'Cada historia', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (29, 'Cant dance', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (30, 'Careful In Career', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (31, 'Carpet crawlers', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (32, 'Cinema show', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (33, 'Come A Long Way', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (34, 'Como hemos cambiado', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (35, 'Criminal World', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (36, 'Cuando quiero sol', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (37, 'Daddys Goma pay for', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (38, 'Dance on a volcano', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (39, 'De puntillas', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (40, 'De sol a sol', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (41, 'Dirty day', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (42, 'Domino', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (43, 'Dont', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (44, 'Dreaming while ...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (45, 'Driving the last...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (46, 'E.de C. instrumental', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (47, 'East At Easter', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (48, 'El canto del gallo', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (49, 'El hombre de papel', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (50, 'El nadador', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (51, 'Elvis Presley & USA', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (52, 'En Portugal', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (53, 'En la oscuridad', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (54, 'En un baile de perro', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (55, 'Encadenada', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (56, 'Escuela de calor', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (57, 'Even Better Than...', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (58, 'Every body gets...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (59, 'Fading lights', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (60, 'Fire', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (61, 'Firth of fith', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (62, 'Fly', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (63, 'Get up', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (64, 'Ghostdancing', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (65, 'Gloria', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (67, 'Great Leap Forward', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (68, 'Guitarra y voz', 1);
INSERT INTO cancion (cod, titulo, duracion) VALUES (69, 'Hadaly', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (70, 'Hay algo raro...', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (71, 'Historia de playback', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (72, 'Hypnotised', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (73, 'I Fall Down', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (74, 'I Threw a Brick', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (75, 'I Wish You Were Here', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (76, 'I know what I like', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (77, 'Icaro', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (78, 'In the glow of night', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (79, 'In too deep', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (80, 'Indian summer sky', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (81, 'Invisible touch', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (82, 'Is That All', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (83, 'Jesus he knows me', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (84, 'La futura promesa', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (85, 'La ley', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (86, 'La mala hora', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (87, 'La negra flor', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (88, 'La noche', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (89, 'La secta del mar', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (90, 'Lamb lies down...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (91, 'Land of confusion', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (92, 'League Of nations', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (93, 'Lemon', 6);
INSERT INTO cancion (cod, titulo, duracion) VALUES (94, 'Lets pretend...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (95, 'Living forever', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (96, 'Living years', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (97, 'Llovió', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (98, 'Lluvia del porvenir', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (99, 'Los endos', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (100, 'Love is Blindness', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (101, 'Luna de agosto', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (102, 'MLK', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (103, 'Me das el mar', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (104, 'Mil mariposas', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (105, 'Moon Cry Like A Baby', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (106, 'Musical box', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (107, 'My Life', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (108, 'My crime of passion', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (109, 'Mysterious Ways', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (110, 'Nada tiene sentido', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (111, 'Never a time', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (112, 'Ni tu ni yo', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (113, 'Night Music', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (114, 'No hay humor', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (115, 'No hay palabras', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (116, 'No son of mine', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (117, 'Nobody knows', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (118, 'Nobodys perfect', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (119, 'Numb', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (120, 'October', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (121, 'Oh Jungleland', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (122, 'Once Upon A Time', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (123, 'One', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (124, 'Oscuro affaire', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (125, 'Poor boy down', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (126, 'Price', 1);
INSERT INTO cancion (cod, titulo, duracion) VALUES (127, 'Promenade', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (128, 'Recibes cartas', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (130, 'Rejoice', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (131, 'Rio Po', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (132, 'Robbery, assault...', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (133, 'Sanctify yourself', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (134, 'Scarlet', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (135, 'Sed de amor', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (136, 'Seeing is believing', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (137, 'Semilla negra', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (138, 'Sentir tu calor', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (139, 'Ser de agua', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (140, 'Shake Of The Ghosts', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (141, 'Shes A river', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (142, 'Since I lost you', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (143, 'So Cruel', 6);
INSERT INTO cancion (cod, titulo, duracion) VALUES (144, 'Some days are better', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (145, 'Sound In 70 Cities', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (146, 'Speed Your Love...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (147, 'Squok', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (148, 'Stay', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (149, 'Stop baby', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (150, 'Stranger in a Land', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (151, 'Street Hassle', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (152, 'Suppers ready', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (153, 'Tell me why', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (154, 'The Kick Inside ofme', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (155, 'The american', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (156, 'The first time', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (157, 'The last domino', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (158, 'The unforgettable fi', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (159, 'The wanderer', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (160, 'Theme For Great city', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (161, 'This Time', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (162, 'Throwing it all away', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (163, 'Time and place', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (164, 'Tomorrow', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (165, 'Tonight, tonight...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (166, 'Tormenta de arena', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (167, 'Tryin to Throw...', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (168, 'Ultra Violet', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (169, 'Un africano...', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (170, 'Until The end...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (171, 'Up On The Catwalk', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (172, 'Volviendo a casa', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (173, 'Waterfront', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (174, 'Way of the world', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (175, 'Way you look at me', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (176, 'White Hot Day', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (177, 'Whos Gonna ride...', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (178, 'Why me?', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (179, 'Wire', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (180, 'With a Shout', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (181, 'Wonderful In Young', 5);
INSERT INTO cancion (cod, titulo, duracion) VALUES (182, 'Word of mouth', 3);
INSERT INTO cancion (cod, titulo, duracion) VALUES (183, 'Yesterday, today,..', 2);
INSERT INTO cancion (cod, titulo, duracion) VALUES (184, 'Zoo Station', 4);
INSERT INTO cancion (cod, titulo, duracion) VALUES (185, 'Zooropa', 6);
INSERT INTO cancion (cod, titulo, duracion) VALUES (186, 'Hold on my heart', 4);


CREATE TABLE club (
  cod VARCHAR(3) NOT NULL, 
  nombre VARCHAR(30) NOT NULL, 
  sede VARCHAR(30), 
  num INTEGER, 
  cod_gru VARCHAR(3) NOT NULL, 
  PRIMARY KEY (cod)
) ;


INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('1  ', 'Zoomania', '33, Abbey Road', 2508, '1  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('10 ', 'Machines', 'Calle 3, Lab 3', 7789, '3  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('11 ', 'Jardin Botanico', '203,Valencia 46004', 357, '6  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('12 ', 'Bonoculture', '12, East Av.', 129, '1  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('13 ', 'Waterfront', 'C/Martin Blas 22', 234, '2  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('14 ', 'FanMike', 'Beverly Hills 90210', 11, '3  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('15 ', 'Presuntos', 'C/Albacete 12, bajo', 237, '5  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('16 ', 'Implicado', 'Torrejon de Ardoz 12', 25, '5  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('17 ', 'Los Culpables', 'C/Maria Cristina 67', 355, '5  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('2  ', 'u2foryou', '23, 11th Street', 1700, '1  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('3  ', 'Che U2', 'C/Almussafes 59', 239, '1  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('4  ', 'Troglominds', 'C/Lepe 22', 999, '2  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('5  ', 'Mentes Fuertes', 'Ramon y Cajal 14', 1984, '2  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('6  ', 'The best mind', '24, Homeround', 1413, '2  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('7  ', 'Genefans', 'C/Visitacion 34', 23412, '4  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('8  ', 'Fanaticgens', 'Av. H. Dominicos 155', 12002, '4  ');
INSERT INTO club (cod, nombre, sede, num, cod_gru) VALUES ('9  ', 'Futuristas', 'C/Alboraya 10', 9850, '6  ');


CREATE TABLE companyia (
  cod VARCHAR(3) NOT NULL, 
  nombre VARCHAR(30) NOT NULL, 
  dir VARCHAR(30), 
  fax VARCHAR(15), 
  tfno VARCHAR(15), 
  PRIMARY KEY (cod)
) ;


INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('1  ', 'Island', '67, JB St.', '     78782222', '     72724444');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('2  ', 'ARIOLA', 'Aragon 204', '    913667889', '    913667890');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('3  ', 'WEA', 'L Hoyos 42', '    932401212', '    932401213');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('4  ', 'Virgin', '2,23th St.', '     20812445', '     20812446');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('5  ', 'ATLANTIC', '12, E St.', '      5481223', '      5482312');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('6  ', 'PoliDiscos', 'Cami de Vera', '      3870001', '      3870000');
INSERT INTO companyia (cod, nombre, dir, fax, tfno) VALUES ('7  ', 'PoliDiscos', 'Polynesia St.', '    942380540', '    942380522');


CREATE TABLE disco (
  cod VARCHAR(3) NOT NULL, 
  nombre VARCHAR(30), 
  fecha DATE, 
  cod_comp VARCHAR(3) NOT NULL, 
  cod_gru VARCHAR(3) NOT NULL, 
  PRIMARY KEY (cod)
);


INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('1  ', 'October', '1981-10-12 00:00:00', '1  ', '1  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('10 ', 'Word of mouth', '1991-05-07 00:00:00', '5  ', '3  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('11 ', 'We cant dance', '1991-02-02 00:00:00', '5  ', '4  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('12 ', 'Invisible touch', '1986-03-03 00:00:00', '5  ', '4  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('13 ', 'Seconds out', '1986-08-08 00:00:00', '5  ', '4  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('14 ', 'De sol a sol', '1987-01-08 00:00:00', '3  ', '5  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('15 ', 'Ser de agua', '1991-02-05 00:00:00', '3  ', '5  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('16 ', 'Alma de blues', '1989-02-03 00:00:00', '3  ', '5  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('17 ', 'La ley del desierto', '1984-03-02 00:00:00', '2  ', '6  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('18 ', 'La canción de Jperro', '1987-04-03 00:00:00', '2  ', '6  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('2  ', 'Zooropa', '1994-08-10 00:00:00', '1  ', '1  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('3  ', 'The unforgettable fi', '1983-03-07 00:00:00', '1  ', '1  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('4  ', 'Achtung baby', '1991-12-09 00:00:00', '1  ', '1  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('5  ', 'Once upon a time', '1985-10-10 00:00:00', '4  ', '2  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('6  ', 'Good news F.N. world', '1995-11-12 00:00:00', '4  ', '2  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('7  ', 'Sparkle in the rain', '1984-03-03 00:00:00', '4  ', '2  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('8  ', 'Sister feelings call', '1981-03-04 00:00:00', '4  ', '2  ');
INSERT INTO disco (cod, nombre, fecha, cod_comp, cod_gru) VALUES ('9  ', 'Living years', '1988-04-02 00:00:00', '5  ', '3  ');


CREATE TABLE esta (
  can INTEGER NOT NULL, 
  cod VARCHAR(3) NOT NULL, 
  PRIMARY KEY (can, cod)
);


INSERT INTO esta (can, cod) VALUES (1, '8  ');
INSERT INTO esta (can, cod) VALUES (2, '18 ');
INSERT INTO esta (can, cod) VALUES (3, '3  ');
INSERT INTO esta (can, cod) VALUES (4, '6  ');
INSERT INTO esta (can, cod) VALUES (5, '18 ');
INSERT INTO esta (can, cod) VALUES (6, '3  ');
INSERT INTO esta (can, cod) VALUES (7, '13 ');
INSERT INTO esta (can, cod) VALUES (8, '15 ');
INSERT INTO esta (can, cod) VALUES (9, '14 ');
INSERT INTO esta (can, cod) VALUES (10, '5  ');
INSERT INTO esta (can, cod) VALUES (11, '5  ');
INSERT INTO esta (can, cod) VALUES (12, '16 ');
INSERT INTO esta (can, cod) VALUES (13, '6  ');
INSERT INTO esta (can, cod) VALUES (14, '15 ');
INSERT INTO esta (can, cod) VALUES (15, '18 ');
INSERT INTO esta (can, cod) VALUES (16, '12 ');
INSERT INTO esta (can, cod) VALUES (17, '4  ');
INSERT INTO esta (can, cod) VALUES (18, '16 ');
INSERT INTO esta (can, cod) VALUES (19, '2  ');
INSERT INTO esta (can, cod) VALUES (20, '3  ');
INSERT INTO esta (can, cod) VALUES (21, '15 ');
INSERT INTO esta (can, cod) VALUES (22, '9  ');
INSERT INTO esta (can, cod) VALUES (23, '10 ');
INSERT INTO esta (can, cod) VALUES (24, '9  ');
INSERT INTO esta (can, cod) VALUES (25, '9  ');
INSERT INTO esta (can, cod) VALUES (26, '7  ');
INSERT INTO esta (can, cod) VALUES (27, '12 ');
INSERT INTO esta (can, cod) VALUES (28, '16 ');
INSERT INTO esta (can, cod) VALUES (29, '11 ');
INSERT INTO esta (can, cod) VALUES (30, '8  ');
INSERT INTO esta (can, cod) VALUES (31, '13 ');
INSERT INTO esta (can, cod) VALUES (32, '13 ');
INSERT INTO esta (can, cod) VALUES (33, '5  ');
INSERT INTO esta (can, cod) VALUES (34, '15 ');
INSERT INTO esta (can, cod) VALUES (35, '6  ');
INSERT INTO esta (can, cod) VALUES (36, '15 ');
INSERT INTO esta (can, cod) VALUES (37, '2  ');
INSERT INTO esta (can, cod) VALUES (38, '13 ');
INSERT INTO esta (can, cod) VALUES (39, '15 ');
INSERT INTO esta (can, cod) VALUES (40, '14 ');
INSERT INTO esta (can, cod) VALUES (41, '2  ');
INSERT INTO esta (can, cod) VALUES (42, '12 ');
INSERT INTO esta (can, cod) VALUES (43, '9  ');
INSERT INTO esta (can, cod) VALUES (44, '11 ');
INSERT INTO esta (can, cod) VALUES (45, '11 ');
INSERT INTO esta (can, cod) VALUES (46, '17 ');
INSERT INTO esta (can, cod) VALUES (47, '7  ');
INSERT INTO esta (can, cod) VALUES (48, '18 ');
INSERT INTO esta (can, cod) VALUES (49, '18 ');
INSERT INTO esta (can, cod) VALUES (50, '17 ');
INSERT INTO esta (can, cod) VALUES (51, '3  ');
INSERT INTO esta (can, cod) VALUES (52, '17 ');
INSERT INTO esta (can, cod) VALUES (53, '14 ');
INSERT INTO esta (can, cod) VALUES (54, '18 ');
INSERT INTO esta (can, cod) VALUES (55, '16 ');
INSERT INTO esta (can, cod) VALUES (56, '17 ');
INSERT INTO esta (can, cod) VALUES (57, '4  ');
INSERT INTO esta (can, cod) VALUES (58, '10 ');
INSERT INTO esta (can, cod) VALUES (59, '11 ');
INSERT INTO esta (can, cod) VALUES (60, '1  ');
INSERT INTO esta (can, cod) VALUES (61, '13 ');
INSERT INTO esta (can, cod) VALUES (62, '4  ');
INSERT INTO esta (can, cod) VALUES (63, '10 ');
INSERT INTO esta (can, cod) VALUES (64, '5  ');
INSERT INTO esta (can, cod) VALUES (65, '1  ');
INSERT INTO esta (can, cod) VALUES (67, '6  ');
INSERT INTO esta (can, cod) VALUES (68, '16 ');
INSERT INTO esta (can, cod) VALUES (69, '17 ');
INSERT INTO esta (can, cod) VALUES (70, '14 ');
INSERT INTO esta (can, cod) VALUES (71, '17 ');
INSERT INTO esta (can, cod) VALUES (72, '6  ');
INSERT INTO esta (can, cod) VALUES (73, '1  ');
INSERT INTO esta (can, cod) VALUES (74, '1  ');
INSERT INTO esta (can, cod) VALUES (75, '5  ');
INSERT INTO esta (can, cod) VALUES (76, '13 ');
INSERT INTO esta (can, cod) VALUES (77, '15 ');
INSERT INTO esta (can, cod) VALUES (78, '12 ');
INSERT INTO esta (can, cod) VALUES (79, '12 ');
INSERT INTO esta (can, cod) VALUES (80, '3  ');
INSERT INTO esta (can, cod) VALUES (81, '12 ');
INSERT INTO esta (can, cod) VALUES (82, '1  ');
INSERT INTO esta (can, cod) VALUES (83, '11 ');
INSERT INTO esta (can, cod) VALUES (84, '16 ');
INSERT INTO esta (can, cod) VALUES (85, '17 ');
INSERT INTO esta (can, cod) VALUES (86, '18 ');
INSERT INTO esta (can, cod) VALUES (87, '18 ');
INSERT INTO esta (can, cod) VALUES (88, '16 ');
INSERT INTO esta (can, cod) VALUES (89, '17 ');
INSERT INTO esta (can, cod) VALUES (90, '13 ');
INSERT INTO esta (can, cod) VALUES (91, '12 ');
INSERT INTO esta (can, cod) VALUES (92, '8  ');
INSERT INTO esta (can, cod) VALUES (93, '2  ');
INSERT INTO esta (can, cod) VALUES (94, '10 ');
INSERT INTO esta (can, cod) VALUES (95, '11 ');
INSERT INTO esta (can, cod) VALUES (96, '9  ');
INSERT INTO esta (can, cod) VALUES (97, '15 ');
INSERT INTO esta (can, cod) VALUES (98, '18 ');
INSERT INTO esta (can, cod) VALUES (99, '13 ');
INSERT INTO esta (can, cod) VALUES (100, '4  ');
INSERT INTO esta (can, cod) VALUES (101, '18 ');
INSERT INTO esta (can, cod) VALUES (102, '3  ');
INSERT INTO esta (can, cod) VALUES (103, '16 ');
INSERT INTO esta (can, cod) VALUES (104, '15 ');
INSERT INTO esta (can, cod) VALUES (105, '7  ');
INSERT INTO esta (can, cod) VALUES (106, '13 ');
INSERT INTO esta (can, cod) VALUES (107, '6  ');
INSERT INTO esta (can, cod) VALUES (108, '10 ');
INSERT INTO esta (can, cod) VALUES (109, '4  ');
INSERT INTO esta (can, cod) VALUES (110, '14 ');
INSERT INTO esta (can, cod) VALUES (111, '11 ');
INSERT INTO esta (can, cod) VALUES (112, '14 ');
INSERT INTO esta (can, cod) VALUES (113, '6  ');
INSERT INTO esta (can, cod) VALUES (114, '16 ');
INSERT INTO esta (can, cod) VALUES (115, '16 ');
INSERT INTO esta (can, cod) VALUES (116, '11 ');
INSERT INTO esta (can, cod) VALUES (117, '9  ');
INSERT INTO esta (can, cod) VALUES (118, '9  ');
INSERT INTO esta (can, cod) VALUES (119, '2  ');
INSERT INTO esta (can, cod) VALUES (120, '1  ');
INSERT INTO esta (can, cod) VALUES (121, '5  ');
INSERT INTO esta (can, cod) VALUES (122, '5  ');
INSERT INTO esta (can, cod) VALUES (123, '4  ');
INSERT INTO esta (can, cod) VALUES (124, '17 ');
INSERT INTO esta (can, cod) VALUES (125, '9  ');
INSERT INTO esta (can, cod) VALUES (126, '3  ');
INSERT INTO esta (can, cod) VALUES (127, '3  ');
INSERT INTO esta (can, cod) VALUES (128, '15 ');
INSERT INTO esta (can, cod) VALUES (130, '1  ');
INSERT INTO esta (can, cod) VALUES (131, '16 ');
INSERT INTO esta (can, cod) VALUES (132, '13 ');
INSERT INTO esta (can, cod) VALUES (133, '5  ');
INSERT INTO esta (can, cod) VALUES (134, '1  ');
INSERT INTO esta (can, cod) VALUES (135, '14 ');
INSERT INTO esta (can, cod) VALUES (136, '9  ');
INSERT INTO esta (can, cod) VALUES (137, '17 ');
INSERT INTO esta (can, cod) VALUES (138, '15 ');
INSERT INTO esta (can, cod) VALUES (139, '15 ');
INSERT INTO esta (can, cod) VALUES (140, '7  ');
INSERT INTO esta (can, cod) VALUES (141, '6  ');
INSERT INTO esta (can, cod) VALUES (142, '11 ');
INSERT INTO esta (can, cod) VALUES (143, '4  ');
INSERT INTO esta (can, cod) VALUES (144, '2  ');
INSERT INTO esta (can, cod) VALUES (145, '8  ');
INSERT INTO esta (can, cod) VALUES (146, '7  ');
INSERT INTO esta (can, cod) VALUES (147, '13 ');
INSERT INTO esta (can, cod) VALUES (148, '2  ');
INSERT INTO esta (can, cod) VALUES (149, '10 ');
INSERT INTO esta (can, cod) VALUES (150, '1  ');
INSERT INTO esta (can, cod) VALUES (151, '7  ');
INSERT INTO esta (can, cod) VALUES (152, '13 ');
INSERT INTO esta (can, cod) VALUES (153, '11 ');
INSERT INTO esta (can, cod) VALUES (154, '7  ');
INSERT INTO esta (can, cod) VALUES (155, '8  ');
INSERT INTO esta (can, cod) VALUES (156, '2  ');
INSERT INTO esta (can, cod) VALUES (157, '12 ');
INSERT INTO esta (can, cod) VALUES (158, '3  ');
INSERT INTO esta (can, cod) VALUES (159, '2  ');
INSERT INTO esta (can, cod) VALUES (160, '8  ');
INSERT INTO esta (can, cod) VALUES (161, '6  ');
INSERT INTO esta (can, cod) VALUES (162, '12 ');
INSERT INTO esta (can, cod) VALUES (163, '10 ');
INSERT INTO esta (can, cod) VALUES (164, '1  ');
INSERT INTO esta (can, cod) VALUES (165, '12 ');
INSERT INTO esta (can, cod) VALUES (166, '17 ');
INSERT INTO esta (can, cod) VALUES (167, '4  ');
INSERT INTO esta (can, cod) VALUES (168, '4  ');
INSERT INTO esta (can, cod) VALUES (169, '17 ');
INSERT INTO esta (can, cod) VALUES (170, '4  ');
INSERT INTO esta (can, cod) VALUES (171, '7  ');
INSERT INTO esta (can, cod) VALUES (172, '14 ');
INSERT INTO esta (can, cod) VALUES (173, '7  ');
INSERT INTO esta (can, cod) VALUES (174, '11 ');
INSERT INTO esta (can, cod) VALUES (175, '10 ');
INSERT INTO esta (can, cod) VALUES (176, '7  ');
INSERT INTO esta (can, cod) VALUES (177, '4  ');
INSERT INTO esta (can, cod) VALUES (178, '9  ');
INSERT INTO esta (can, cod) VALUES (179, '3  ');
INSERT INTO esta (can, cod) VALUES (180, '1  ');
INSERT INTO esta (can, cod) VALUES (181, '8  ');
INSERT INTO esta (can, cod) VALUES (182, '10 ');
INSERT INTO esta (can, cod) VALUES (183, '10 ');
INSERT INTO esta (can, cod) VALUES (184, '4  ');
INSERT INTO esta (can, cod) VALUES (185, '2  ');
INSERT INTO esta (can, cod) VALUES (186, '11 ');


CREATE TABLE grupo (
  cod VARCHAR(3) NOT NULL, 
  nombre VARCHAR(30) NOT NULL, 
  fecha DATE, 
  pais VARCHAR(10), 
  PRIMARY KEY (cod)
) ;


INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('1  ', 'U2', '1977-01-01 00:00:00', 'Inglaterra');
INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('2  ', 'Simple Minds', '1979-02-09 00:00:00', 'Inglaterra');
INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('3  ', 'Mike + The Mechanics', '1988-04-06 00:00:00', 'Inglaterra');
INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('4  ', 'Genesis', '1975-10-10 00:00:00', 'Inglaterra');
INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('5  ', 'Presuntos Implicados', '1985-11-01 00:00:00', 'España');
INSERT INTO grupo (cod, nombre, fecha, pais) VALUES ('6  ', 'Radio Futura', '1980-01-07 00:00:00', 'España');

CREATE TABLE pertence (
  dni VARCHAR(10) NOT NULL, 
  cod VARCHAR(3) NOT NULL, 
  funcion VARCHAR(15), 
  PRIMARY KEY (dni, cod)
);

INSERT INTO pertence (dni, cod, funcion) VALUES ('1111111111', '3  ', 'teclado');
INSERT INTO pertence (dni, cod, funcion) VALUES ('1111111112', '1  ', 'bajo');
INSERT INTO pertence (dni, cod, funcion) VALUES ('1111111113', '1  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('1111111114', '2  ', 'guitarra');
INSERT INTO pertence (dni, cod, funcion) VALUES ('1111114444', '6  ', 'batería');
INSERT INTO pertence (dni, cod, funcion) VALUES ('2345678444', '1  ', 'guitarra');
INSERT INTO pertence (dni, cod, funcion) VALUES ('3232456547', '4  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('3333567898', '6  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('3454677777', '2  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('4444444444', '1  ', 'batería');
INSERT INTO pertence (dni, cod, funcion) VALUES ('4454321111', '6  ', 'bajo');
INSERT INTO pertence (dni, cod, funcion) VALUES ('5454532222', '3  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('5555678976', '6  ', 'guitarra');
INSERT INTO pertence (dni, cod, funcion) VALUES ('5556787777', '5  ', 'guitarra');
INSERT INTO pertence (dni, cod, funcion) VALUES ('5656378999', '5  ', 'voz');
INSERT INTO pertence (dni, cod, funcion) VALUES ('6666667885', '5  ', 'bajo');
INSERT INTO pertence (dni, cod, funcion) VALUES ('7654323234', '3  ', 'batería');
INSERT INTO pertence (dni, cod, funcion) VALUES ('7876543428', '4  ', 'teclado');
INSERT INTO pertence (dni, cod, funcion) VALUES ('8884566666', '3  ', 'bajo');
INSERT INTO pertence (dni, cod, funcion) VALUES ('8884566666', '4  ', 'bajo');


