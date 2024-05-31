<?php
// Inclure fichier de configuration
require_once "app/config/config.php";

// Connexion à la BDD
try {
        // Créer une nouvelle instance PDO avec la base de données spécifiée
        $pdo = new PDO($mySQLDSN, $config['username'], $config['password']);
        echo "Connexion à la base de données réussie";
    
        // Création de l'administrateur
        $sql_create_admin = "CREATE USER '" . $configAdminZoo['username'] . "'@'%' IDENTIFIED BY '" . $configAdminZoo['password'] . "'";
        $pdo->exec($sql_create_admin);
} catch(PDOException $e) {
        // Gérer les erreurs
        echo "Erreur lors de la création de l'admin : " . $e->getMessage();
}