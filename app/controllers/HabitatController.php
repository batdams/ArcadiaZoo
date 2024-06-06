<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';
require_once "../app/models/Habitat.php";

class HabitatController extends Controller
{
    /**
     * Mise à jour des habitats pour l'affichage
     * 
     * Cette méthode met à jour les habitats pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayHabitat($pdo): array
    {
        // Requête SQL pour récupérer les habitats
        $sql = "SELECT habitat_id, name, img_path, description FROM habitat";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Habitat');
        if($stmt->execute()){
            $habitats = $stmt->fetchAll();
            return $habitats;
        } else {
            return null;
        }
    }

    /**
     * Affiche la page des habitats
     * 
     * Cette méthode affiche la page habitats de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/habitats.html');
    }
}