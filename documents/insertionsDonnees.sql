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
/* Habitat */
INSERT INTO habitat (name, img_path, description)
VALUES ('Savane', '../../../public/pictures/habitats/savannah.jpg', "Vaste plaine herbeuse parsemée de quelques arbres et arbustes, caractérisée par un climat tropical avec des saisons bien distinctes, offrant un habitat unique pour une diversité impressionnante d'animaux sauvages.");
INSERT INTO habitat (name, img_path, description)
VALUES ('Jungle', '../../../public/pictures/habitats/jungle.jpg', "La jungle est une forêt dense et luxuriante, riche en biodiversité, où des plantes exubérantes et une faune variée prospèrent dans un climat humide et chaud.");
INSERT INTO habitat (name, img_path, description)
VALUES ('Marais', '../../../public/pictures/habitats/swamp.jpg', "Le marais est un habitat humide et riche en biodiversité, caractérisé par des eaux stagnantes et une végétation dense. C'est un refuge pour une faune variée, allant des amphibiens et reptiles aux oiseaux et mammifères, qui trouvent nourriture et abri dans ce milieu aquatique.");
/* Animaux */
INSERT INTO animal (name, breed_id, img_path, habitat) VALUES ('Lion', 2, 'URLinvalide', 'Savane');
INSERT INTO animal (name, breed_id, img_path, habitat) VALUES ('Tigre', 2, 'URLinvalide', 'Jungle');

/* 3ème étape services */
INSERT INTO service (title, img_path, description) VALUES ('Restaurant', '../../../public/pictures/services/restaurant.jpg', `Une simple halte ? Une pause plus longue ? Profitez d'une expérience culinaire adaptée à votre envie. Que vous optiez pour une collation rapide ou un repas plus complet, <b>notre service de restauration</b> propose une cuisine simple mais délicieuse.`);
INSERT INTO service (title, img_path, description) VALUES ('Forest', '../../../public/pictures/services/savaneLion.jpg', 'La foret canadienne, majestueuse, pleine de vie');