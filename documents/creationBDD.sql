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
CREATE TABLE animal (
	animal_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	breed_id VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	habitat VARCHAR(50) NOT NULL
);

CREATE TABLE breed (
	breed_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
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

/*3ème étape services*/

CREATE TABLE service (
	service_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(50) NOT NULL,
	img_path VARCHAR(255) NOT NULL,
	description TEXT NOT NULL,
	create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
