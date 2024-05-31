CREATE TABLE roles (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	role VARCHAR(50) NOT NULL
	);
CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(60) NOT NULL,
	firstname VARCHAR(50) NOT NULL,
	lastname VARCHAR(100) NOT NULL,
    role_id INT NOT NULL,
	FOREIGN KEY (role_id) REFERENCES roles(id)
	);

INSERT INTO roles (role) VALUES 
('admin'),
('vet'),
('employee');

INSERT INTO users (email, password, firstname, lastname, role_id)
VALUES ('josebu@arcadia.com', '$2y$10$zS62lQI46h0yryQ6riYDDehZvGqMwWKUD8gktKxm.Y4.jK18/09rm', 'jose', 'bu', 1);

INSERT INTO users (email, password, firstname, lastname, role_id)
VALUES ('vetTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'alba', 'tros', 2);

INSERT INTO users (email, password, firstname, lastname, role_id)
VALUES ('employeeTest@arcadia.com', '$2y$10$dOKz7KHZH6S1PXACs0UME.x/3cjvtBnWrSOehQQSocDeXAuNEqAfi', 'benji', 'rafe', 3);
/* FAIRE EMPLOYEE_TEST et VETO_TEST*/
