<?php
// Inclure fichier de configuration
require_once "app/config/config.php";

// Connexion à la BDD
try {
    // Création d'une instance PDO sans spécifier la base de données
    $pdo = new PDO($mySQLDSNNoDB, $config['username'], $config['password']);

    // Configuration de PDO pour qu'il lance des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $sql_create_database = "CREATE DATABASE IF NOT EXISTS " . $config['database'];
    $pdo->exec($sql_create_database);

} catch(PDOException $e) {
    // Gérer les erreurs de connexion
    echo "Erreur lors de la création de la base de données : " . $e->getMessage();
}

?>