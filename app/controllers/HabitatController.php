<?php

namespace controllers;

// Inclusion des classes
require_once 'app/controllers/Controller.php';
require_once "app/models/Habitat.php";

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
    public function index($pdo): void
    {
    $data = ['habitats' => HabitatController::displayHabitat($pdo)];
    $data['animals'] = AnimalController::displayAnimal($pdo);
    $data['breeds'] = AnimalController::displayBreed($pdo);
    $this->viewManager->renderData('bodies/habitats.php', $data);
    }

    /**
     * Ajoute un habitat
     * 
     * Cette méthode ajoute un habitat.
     * 
     * @param //NAME IMG DESCRIP
     * @return void
     */
    public function addHabitat($pdo): void
    {
    // Requête SQL pour l'insertion d'un habitat
    $sql = "INSERT INTO habitat (name, img_path, description) VALUES (:name, :img_path, :description)";
    // Préparation de la requête SQL (Mise en mémoire pour la manipuler via PDOStatement)
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST['nameAdd']) && isset($_FILES['imgHabitatAdd']) && isset($_POST['habitatDescriptionAdd'])) {
        // Récupération des données via les superglobales $_POST $_FILES
        //Récupération des données de l'image
        $imgName = $_FILES['imgHabitatAdd']['name']; // Nom du fichier
        $imgTempName = $_FILES['imgHabitatAdd']['tmp_name']; // Dossier temporaire
        $imgError = $_FILES['imgHabitatAdd']['error']; // Valeur d'erreur de l'image
        //Enregistrement image dans dossier services
        if($imgError === 0) {
            $destination = '../public/pictures/habitats/' . $imgName;
            move_uploaded_file($imgTempName, $destination);
        } else {
            echo "Erreur lors de l'enregistrement de l'image";
        }
        $name = $_POST['nameAdd'];
        $img_path = '../public/pictures/habitats/' . $imgName;
        $description = $_POST['habitatDescriptionAdd'];
        // Liaison des données aux marqueurs nommés
        $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
        $stmt->bindValue(':img_path', $img_path, \PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, \PDO::PARAM_STR);
        // Execution de la requête
        if ($stmt->execute()) {
            // Redirection vers la page Admin
            $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
            // En cas d'erreur lors de l'execution
            echo 'ERREUR INSERTION HABITAT';
            }
        }
    }

    /**
     * supprime un habitat
     * 
     * Cette méthode supprime un habitat.
     * 
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return void
     */
    public function delHabitat($pdo): void
    {
        // Requête SQL pour récupérer les services
        $sql = "DELETE FROM habitat WHERE name = :name;";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['delHabitat'])) {
            $delHabitat = $_POST['delHabitat'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':name', $delHabitat, \PDO::PARAM_STR);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR SUPPRESSION HABITAT';
            }
        }
    }
}