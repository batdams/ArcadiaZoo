<?php

namespace controllers;

// Inclusion des classes
require_once '../app/models/Animal.php';

use \PDO; // Ajout de l'utilisation de la classe PDO
use \Animal;

class AnimalController {

    private PDO $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    // Méthode pour afficher la liste des animaux
    public function showAnimals() {

        $animal = Animal::getAllAnimals($this->pdo);
        
        // Passer les données à la vue
        include '../views/bodies/connectedEmployee.php';
        return $animal;
    }
}