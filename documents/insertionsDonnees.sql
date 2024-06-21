/* 1ère etape */
INSERT INTO role (role) VALUES 
('admin'),
('vet'),
('employee');

INSERT INTO app_user (email, password, firstname, lastname, role_id)
VALUES ('josebu@arcadia.com', '$2y$10$zS62lQI46h0yryQ6riYDDehZvGqMwWKUD8gktKxm.Y4.jK18/09rm', 'jose', 'bu', 1);

INSERT INTO app_user (email, password, firstname, lastname, role_id)
VALUES ('vetTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'alba', 'tros', 2);

INSERT INTO app_user (email, password, firstname, lastname, role_id)
VALUES ('employeeTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'benji', 'rafe', 3);

/* 2ème étape habitats, races & animaux */
/* Race */
INSERT INTO breed (breed_name) VALUES ('Félidé');
INSERT INTO breed (breed_name) VALUES ('Éléphantidé');
INSERT INTO breed (breed_name) VALUES ('Giraffidé');
INSERT INTO breed (breed_name) VALUES ('Hominidés');
INSERT INTO breed (breed_name) VALUES ('Mégalonychidés');
INSERT INTO breed (breed_name) VALUES ('Alligatoridae');
INSERT INTO breed (breed_name) VALUES ('Ardéidés');
INSERT INTO breed (breed_name) VALUES ('Cricétidés');
INSERT INTO breed (breed_name) VALUES ('Psittacidés');
INSERT INTO breed (breed_name) VALUES ('Crocodylidés');
INSERT INTO breed (breed_name) VALUES ('Colubridés'); -- exemple générique pour les serpents
INSERT INTO breed (breed_name) VALUES ('Falconidés');
INSERT INTO breed (breed_name) VALUES ('Tapiridés');
INSERT INTO breed (breed_name) VALUES ('Ardeidés'); -- Héron cendré
INSERT INTO breed (breed_name) VALUES ('Crocodylidés'); -- Alligator
INSERT INTO breed (breed_name) VALUES ('Émydidés'); -- Tortue de Floride
INSERT INTO breed (breed_name) VALUES ('Ardeidés'); -- Aigrette garzette
INSERT INTO breed (breed_name) VALUES ('Myocastoridés'); -- Ragondin
INSERT INTO breed (breed_name) VALUES ('Ranidés'); -- Grenouille taureau
INSERT INTO breed (breed_name) VALUES ('Cyprinidés'); -- Carpe commune
INSERT INTO breed (breed_name) VALUES ('Suidés'); -- Sanglier


/* Habitat */
INSERT INTO habitat (name, img_path, description)
VALUES ('Savane', '../../../public/pictures/habitats/savannah.jpg', "Vaste plaine herbeuse parsemée de quelques arbres et arbustes, caractérisée par un climat tropical avec des saisons bien distinctes, offrant un habitat unique pour une diversité impressionnante d'animaux sauvages.");
INSERT INTO habitat (name, img_path, description)
VALUES ('Jungle', '../../../public/pictures/habitats/jungle.jpg', "La jungle est une forêt dense et luxuriante, riche en biodiversité, où des plantes exubérantes et une faune variée prospèrent dans un climat humide et chaud.");
INSERT INTO habitat (name, img_path, description)
VALUES ('Marais', '../../../public/pictures/habitats/swamp.jpg', "Le marais est un habitat humide et riche en biodiversité, caractérisé par des eaux stagnantes et une végétation dense. C'est un refuge pour une faune variée, allant des amphibiens et reptiles aux oiseaux et mammifères, qui trouvent nourriture et abri dans ce milieu aquatique.");
/* Animaux */
--SAVANE
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Lion', 1, '../../../public/pictures/animals/lion.jpg', 'Carnivore', 1);
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Léopard', 1, '../../../public/pictures/animals/leopard.jpg', 1);
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Guépard', 1, '../../../public/pictures/animals/guepard.jpg', 1);
--JUNGLE
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Tigre', 1, '../../../public/pictures/animals/tigre.jpg', 'Carnivore', 2, 'Le tigre, grand félin rayé, est un chasseur solitaire puissant. Il vit principalement en Asie, dans divers habitats, des forêts aux marécages.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Perroquet', 12, '../../../public/pictures/animals/perroquet.jpg', 'Herbivore', 2, 'Le perroquet, oiseau coloré et intelligent, est célèbre pour sa capacité à imiter les sons. Il habite principalement les forêts tropicales.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Éléphant d''Asie', 2, '../../../public/pictures/animals/elephant_asie.jpg', 'Herbivore', 2, 'L''éléphant d''Asie, plus petit que son cousin d''Afrique, vit dans les forêts tropicales et les prairies d''Asie du Sud-Est. C''est un herbivore social et intelligent, essentiel à son écosystème.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Tapir', 16, '../../../public/pictures/animals/tapir.jpg', 'Herbivore', 2, 'Le tapir, mammifère herbivore au corps massif et à la trompe préhensile, vit dans les forêts tropicales d''Amérique du Sud et d''Asie du Sud-Est. Il joue un rôle important en dispersant les graines.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Paresseux', 5, '../../../public/pictures/animals/paresseux.jpg', 'Herbivore', 2, 'Le paresseux, mammifère arboricole lent, vit dans les forêts tropicales d''Amérique. Il est connu pour son mode de vie tranquille et suspendu.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Serpent', 14, '../../../public/pictures/animals/serpent.jpg', 'Carnivore', 2, 'Le serpent, reptile sans pattes, est un prédateur silencieux et adaptable. Il vit dans divers habitats, des déserts aux forêts tropicales.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Gorille', 4, '../../../public/pictures/animals/gorille.jpg', 'Herbivore', 2, 'Le gorille, grand primate social, vit dans les forêts tropicales africaines. Il est connu pour sa force, son intelligence et ses comportements sociaux.');
--INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Orang-outan', 4, '../../../public/pictures/animals/orang_outan.jpg', 'Herbivore', 2, 'L’orang-outan, grand singe arboricole d’Asie du Sud-Est, est célèbre pour son intelligence et ses longs bras. Il vit principalement dans les forêts tropicales.');
--Marais
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Crocodile', 13, '../../../public/pictures/animals/crocodile.jpg', 'Carnivore', 3, 'Le crocodile, grand reptile semi-aquatique, est un prédateur redoutable des rivières et marécages tropicaux. Il a une peau épaisse et des mâchoires puissantes.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Héron cendré', 17, '../../../public/pictures/animals/heron_cendre.jpg', 'Piscivore', 3, 'L''héron cendré est un grand échassier qui chasse dans les eaux peu profondes des marais et des étangs.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Alligator', 18, '../../../public/pictures/animals/alligator.jpg', 'Carnivore', 3, 'L''alligator est un grand reptile semi-aquatique des marais et des zones humides, connu pour sa morsure puissante et sa peau écailleuse.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Tortue de Floride', 19, '../../../public/pictures/animals/tortue_floride.jpg', 'Omnivore', 3, 'La tortue de Floride est une espèce d''eau douce souvent trouvée dans les marais et les lacs. Elle se nourrit d''une variété de plantes et de petits animaux.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Aigrette garzette', 20, '../../../public/pictures/animals/aigrette_garzette.jpg', 'Piscivore', 3, 'L''aigrette garzette est un échassier élégant qui se nourrit de poissons et d''insectes aquatiques dans les marais et les étangs.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Ragondin', 21, '../../../public/pictures/animals/ragondin.jpg', 'Herbivore', 3, 'Le ragondin est un gros rongeur semi-aquatique que l''on trouve souvent dans les marais et les zones humides, où il se nourrit de plantes aquatiques.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Grenouille taureau', 22, '../../../public/pictures/animals/grenouille_taureau.jpg', 'Carnivore', 3, 'La grenouille taureau est une espèce de grenouille aquatique robuste présente dans les marais et les étangs, où elle se nourrit de petits animaux et d''insectes.');
--INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Carpe commune', 23, '../../../public/pictures/animals/carpe_commune.jpg', 'Omnivore', 3, 'La carpe commune est un poisson d''eau douce très répandu dans les marais et les rivières, se nourrissant principalement de plantes et d''insectes.');
INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES ('Sanglier', 24, '../../../public/pictures/animals/sanglier.jpg', 'Omnivore', 3, 'Le sanglier est un mammifère robuste que l''on trouve parfois dans les marais, où il se nourrit de racines, de plantes et de petits animaux.');


/*Liaison animaux habitats OLD*/
--INSERT INTO animal_habitat (animal_id, habitat_id) VALUES (1, 1); -- Lion -> Savane
--INSERT INTO animal_habitat (animal_id, habitat_id) VALUES (2, 1); -- Jaguar -> Savane
/* 3ème étape services */
INSERT INTO service (title, img_path, description) VALUES ('Restaurant', '../../../public/pictures/services/restaurant.jpg', `Une simple halte ? Une pause plus longue ? Profitez d'une expérience culinaire adaptée à votre envie. Que vous optiez pour une collation rapide ou un repas plus complet, <b>notre service de restauration</b> propose une cuisine simple mais délicieuse.`);
INSERT INTO service (title, img_path, description) VALUES ('Forest', '../../../public/pictures/services/savaneLion.jpg', 'La foret canadienne, majestueuse, pleine de vie');

/* 4ème étape horaires */
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (0, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (1, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (2, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (3, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (4, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (5, '09:00:00', '19:00:00');
INSERT INTO zoo_hours (day_of_week, opening_time, closing_time) VALUES (6, '09:00:00', '19:00:00');