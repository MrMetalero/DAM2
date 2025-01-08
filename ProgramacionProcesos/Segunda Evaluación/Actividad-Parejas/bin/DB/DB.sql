-- Mazo Rooms
-- Insertar el mazo
INSERT INTO mazo (nombre, precio) VALUES ('Rooms', 4.88);

-- Insertar cartas ()
INSERT INTO carta (nombre, precio) VALUES 
(""), ('Island'), ('Mountain'), ('Peculiar Lighthouse'), 
('Bottomless Pool // Locker Room'), ('Central Elevator // Promising Stairs'), 
('Glassworks // Shattered Yard'), ('Meat Locker // Drowned Diner'),
("Painter's Studio // Defaced Gallery"), ('Roaring Furnace // Steaming Sauna'), 
('Smoky Lounge // Misty Salon'), ('Ticket Booth // Tunnel of Hate'), 
('Unable to Scream'), ("Betrayer's Bargain"), ("Don't Make a Sound"), 
("Trial of Agony"), ("Vengeful Possession"), ("Creeping Peeper"),
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 
('Carta 7'), ('Carta 8'), ('Carta 9'), 



-- Relacionar las cartas con el mazo (suponiendo que el id del mazo es 1)
INSERT INTO mazo_carta (mazo_id, carta_id) VALUES
(1, 1), (1, 2), (1, 3), (1, 4), (1, 5), (1, 6), (1, 7), (1, 8), (1, 9), (1, 10),
(1, 11), (1, 12), (1, 13), (1, 14), (1, 15), (1, 16), (1, 17), (1, 18), (1, 19), (1, 20),
(1, 21), (1, 22), (1, 23), (1, 24), (1, 25), (1, 26), (1, 27), (1, 28), (1, 29), (1, 30),
(1, 31), (1, 32), (1, 33), (1, 34), (1, 35), (1, 36), (1, 37), (1, 38), (1, 39), (1, 40),
(1, 41), (1, 42), (1, 43), (1, 44), (1, 45), (1, 46), (1, 47), (1, 48), (1, 49), (1, 50),
(1, 51), (1, 52), (1, 53), (1, 54), (1, 55), (1, 56), (1, 57), (1, 58), (1, 59), (1, 60);

