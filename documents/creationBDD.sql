/* 1ere étape, roles et users (admin employee vet */
CREATE TABLE role (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	role VARCHAR(50) NOT NULL
	);
CREATE TABLE app_user (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(60) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(100) NOT NULL,
    role_id INT NOT NULL,
	FOREIGN KEY (role_id) REFERENCES role(id)
	);

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

/* 2ème étape animaux, races et habitats */
CREATE TABLE animal (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	breed_id VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	habitat VARCHAR(50) NOT NULL
);

CREATE TABLE breed (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	breed_name VARCHAR(50) NOT NULL
);

CREATE TABLE habitat (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	description TEXT
);

CREATE TABLE animal_habitat (
    animal_id INT NOT NULL,
    habitat_id INT NOT NULL,
    PRIMARY KEY (animal_id, habitat_id),
    FOREIGN KEY (animal_id) REFERENCES animal(id),
    FOREIGN KEY (habitat_id) REFERENCES habitat(id)
);

/* TEST breed et animal TEST */
INSERT INTO breed (breed_name) VALUES ('Félin');
INSERT INTO animal (name, breed_id, img_path, habitat) VALUES ('Lion', 1, 'URLinvalide', 'Savane');
INSERT INTO animal (name, breed_id, img_path, habitat) VALUES ('Jaguar', 1, 'URLinvalide', 'Savane');

/*3ème étape services*/

CREATE TABLE service (
	service_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	description TEXT NOT NULL,
	create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* TEST services TEST */
INSERT INTO service (title, img_path, description) VALUES ('Restaurant', '../../../public/pictures/services/restaurant.jpg', `Une simple halte ? Une pause plus longue ? Profitez d'une expérience culinaire adaptée à votre envie. Que vous optiez pour une collation rapide ou un repas plus complet, <b>notre service de restauration</b> propose une cuisine simple mais délicieuse.`);
INSERT INTO service (title, img_path, description) VALUES ('Forest', '../../../public/pictures/services/savaneLion.jpg', 'La foret canadienne, majestueuse, pleine de vie');