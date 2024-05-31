<?php
// Inclure le fichier de configuration
require_once('config.php');

// Connexion à la base de données
$conn = new mysqli($config['database']['host'], $config['database']['username'], $config['database']['password']);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Création de la base de données
$sql_create_database = "CREATE DATABASE IF NOT EXISTS " . $config['database']['database_name'];
if ($conn->query($sql_create_database) === TRUE) {
    echo "Base de données créée avec succès<br>";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Création de l'utilisateur administrateur
$sql_create_user = "CREATE USER 'zoo_admin'@'" . $config['database']['host'] . "' IDENTIFIED BY '" . $config['database']['admin_password'] . "'";
if ($conn->query($sql_create_user) === TRUE) {
    echo "Utilisateur administrateur créé avec succès<br>";
} else {
    echo "Erreur lors de la création de l'utilisateur administrateur : " . $conn->error;
}

// Attribution des rôles à l'utilisateur administrateur
$sql_grant_privileges = "GRANT ALL PRIVILEGES ON " . $config['database']['database_name'] . ".* TO 'zoo_admin'@'" . $config['database']['host'] . "'";
if ($conn->query($sql_grant_privileges) === TRUE) {
    echo "Privilèges attribués avec succès à l'utilisateur administrateur<br>";
} else {
    echo "Erreur lors de l'attribution des privilèges à l'utilisateur administrateur : " . $conn->error;
}

// Fermer la connexion
$conn->close();
?>