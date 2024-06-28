<?php

namespace controllers;

// Inclusion des classes
require_once 'app/controllers/Controller.php';
require_once 'app/models/Animal.php';

class AnimalController extends Controller {

    /**
     * Mise à jour des animaux pour l'affichage
     * 
     * Cette méthode met à jour les animaux d'un habitat pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @param habitat $habitat id de l'habitat selectionné
     * @return array
     */
    public static function displayAnimal($pdo): array
    {
        // Requête SQL pour récupérer les animaux
        $sql = "SELECT * FROM animal";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Animal');
        if($stmt->execute()){
            $animals = $stmt->fetchAll();
            return $animals;
        } else {
            return null;
        }
    }

    /**
     * Mise à jour des races pour l'affichage
     * 
     * Cette méthode met à jour les races d'animaux pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayBreed($pdo): array
    {
        // Requête SQL pour récupérer les animaux
        $sql = "SELECT breed_id, breed_name FROM breed";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        if($stmt->execute()){
            $breeds = $stmt->fetchAll();
            return $breeds;
        } else {
            return null;
        }
    }

    /**
     * Ajoute un animal
     * 
     * Cette méthode ajoute un animal.
     * 
     * @param //name breed img diet habitat
     * @return void
     */
    public function addAnimal($pdo): void
    {
    // Requête SQL pour l'insertion d'un animal
    $sql = "INSERT INTO animal (name, breed_id, img_path, diet, habitat_id, description) VALUES (:name, :breed_id, :img_path, :diet, :habitat_id, :description)";
    // Préparation de la requête SQL (Mise en mémoire pour la manipuler via PDOStatement)
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST['animalNameAdd']) && isset($_POST['breedAnimal']) && isset($_FILES['imgAnimalAdd']) && isset($_POST['dietAnimal']) && isset($_POST['habitatAnimal']) && isset($_POST['descriptionAnimal'])) {
        // Récupération des données via les superglobales $_POST $_FILES
        //Récupération des données de l'image
        $imgName = $_FILES['imgAnimalAdd']['name']; // Nom du fichier
        $imgTempName = $_FILES['imgAnimalAdd']['tmp_name']; // Dossier temporaire
        $imgError = $_FILES['imgAnimalAdd']['error']; // Valeur d'erreur de l'image
        //Enregistrement image dans dossier services
        if($imgError === 0) {
            $destination = '../public/pictures/animals/' . $imgName;
            move_uploaded_file($imgTempName, $destination);
        } else {
            echo "Erreur lors de l'enregistrement de l'image";
        }
        $name = $_POST['animalNameAdd'];
        $breed_id = $_POST['breedAnimal'];
        $img_path = '../public/pictures/animals/' . $imgName;
        $diet = $_POST['dietAnimal'];
        $habitat_id = $_POST['habitatAnimal'];
        $description = $_POST['descriptionAnimal'];
        // Liaison des données aux marqueurs nommés
        $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
        $stmt->bindValue(':breed_id', $breed_id, \PDO::PARAM_INT);
        $stmt->bindValue(':img_path', $img_path, \PDO::PARAM_STR);
        $stmt->bindValue(':diet', $diet, \PDO::PARAM_STR);
        $stmt->bindValue(':habitat_id', $habitat_id, \PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, \PDO::PARAM_STR);
        // Execution de la requête
        if ($stmt->execute()) {
            // Redirection vers la page Admin
            $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
            // En cas d'erreur lors de l'execution
            echo 'ERREUR INSERTION ANIMAL';
            }
        }
    }

    /**
     * supprime un animal
     * 
     * Cette méthode supprime un animal.
     * 
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return void
     */
    public function delAnimal($pdo): void
    {
        // Requête SQL pour supprimer 1 animal
        $sql = "DELETE FROM animal WHERE name = :name;";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['delAnimal'])) {
            $delAnimal = $_POST['delAnimal'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':name', $delAnimal, \PDO::PARAM_STR);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR SUPPRESSION ANIMAL';
            }
        }
    }
}