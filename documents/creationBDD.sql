/* 1ere étape, roles et users (admin employee vet */
CREATE TABLE role (
	role_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	role VARCHAR(50) NOT NULL
	);
CREATE TABLE app_user (
	app_user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(60) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(100) NOT NULL,
    role_id INT NOT NULL,
	FOREIGN KEY (role_id) REFERENCES role(role_id)
	);

/* 2ème étape animaux, races et habitats */
CREATE TABLE habitat (
	habitat_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	description TEXT NOT NULL
);

CREATE TABLE breed (
	breed_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	breed_name VARCHAR(50) NOT NULL
);

CREATE TABLE animal (
	animal_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	breed_id INT(11) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	diet VARCHAR(50) NOT NULL,
	habitat_id INT(11) NOT NULL,
	description TEXT NOT NULL,
	FOREIGN KEY (habitat_id) REFERENCES habitat(habitat_id),
	FOREIGN KEY (breed_id) REFERENCES breed(breed_id)
);

/* OLD, One-to-many , ø associated table
CREATE TABLE animal_habitat (
    animal_id INT NOT NULL,
    habitat_id INT NOT NULL,
    PRIMARY KEY (animal_id, habitat_id),
    FOREIGN KEY (animal_id) REFERENCES animal(animal_id) ON DELETE CASCADE,
    FOREIGN KEY (habitat_id) REFERENCES habitat(habitat_id) ON DELETE CASCADE
);*/

/*3ème étape services*/

CREATE TABLE service (
	service_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	description TEXT NOT NULL,
	create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*4ème étape horaires*/

CREATE TABLE zoo_hours (
	hours_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	day_of_week INT NOT NULL,
	opening_time TIME NOT NULL,
	closing_time TIME NOT NULL
);

/*5ème étapes avis*/
CREATE TABLE view (
	view_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nickname VARCHAR(100) NOT NULL,
	view_message TEXT NOT NULL,
	is_valide BOOLEAN
);