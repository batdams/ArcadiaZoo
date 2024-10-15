<?php

namespace controllers;

// Inclusion des classes
require_once 'app/controllers/Controller.php';
require_once "app/models/Service.php";

class ServiceController extends Controller
{
    /**
     * Mise à jour des services pour l'affichage
     * 
     * Cette méthode met à jour les services pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayService($pdo): array
    {
        // Requête SQL pour récupérer les services
        $sql = "SELECT service_id, title, img_path, description FROM service";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Service');
        if($stmt->execute()){
            $services = $stmt->fetchAll();
            return $services;
        } else {
            return null;
        }
    }

    /**
     * Affiche la page des services
     * 
     * Cette méthode affiche la page services de l'application.
     * 
     * @return void
     */
    public function index($pdo): void
    {
    $data = ['services' => ServiceController::displayService($pdo)];
    $this->viewManager->renderData('bodies/services.php', $data);
    }

    /**
     * Ajoute un service
     * 
     * Cette méthode ajoute un service.
     * 
     * @param //NAME IMG DESCRIP
     * @return void
     */
    public function addService($pdo): void
    {
    // Requête SQL pour l'insertion d'un service
    $sql = "INSERT INTO service (title, img_path, description) VALUES (:title, :img_path, :description)";
    // Préparation de la requête SQL (Mise en mémoire pour la manipuler via PDOStatement)
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST['titleAdd']) && isset($_FILES['imgAdd']) && isset($_POST['descriptionAdd'])) {
        // Récupération des données via les superglobales $_POST $_FILES
        //Récupération des données de l'image
        $imgName = $_FILES['imgAdd']['name']; // Nom du fichier
        $imgTempName = $_FILES['imgAdd']['tmp_name']; // Dossier temporaire
        $imgError = $_FILES['imgAdd']['error']; // Valeur d'erreur de l'image
        //Enregistrement image dans dossier services
        if($imgError === 0) {
            $destination =  dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'pictures' . DIRECTORY_SEPARATOR . 'services' . DIRECTORY_SEPARATOR . $imgName;
            move_uploaded_file($imgTempName, $destination);
        } else {
            echo "Erreur lors de l'enregistrement de l'image";
        }
        $title = $_POST['titleAdd'];
        $img_path = '/public/pictures/services/' . $imgName;
        $description = $_POST['descriptionAdd'];
        // Liaison des données aux marqueurs nommés
        $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
        $stmt->bindValue(':img_path', $img_path, \PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, \PDO::PARAM_STR);
        // Execution de la requête
        if ($stmt->execute()) {
            // Redirection vers la page Admin
            $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
            // En cas d'erreur lors de l'execution
            echo 'ERREUR INSERTION SERVICE';
            }
        }
    }

    /**
     * Modifie un service
     * 
     * Cette méthode modifie un service.
     * 
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return void
     */
    public function modifService($pdo): void
    {
        // Requête SQL pour récupérer les services
        $sql = "UPDATE service
                SET title = :title, description = :description, img_path = :img_path
                WHERE service_id = 7;
                ";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['titleModif']) && isset($_FILES['imgModif']) && isset($_POST['descriptionModif'])) {
            // Récupération des données via les superglobales $_POST $_FILES
            //Récupération des données de l'image
            $imgName = $_FILES['imgModif']['name']; // Nom du fichier
            $imgTempName = $_FILES['imgModif']['tmp_name']; // Dossier temporaire
            $imgError = $_FILES['imgModif']['error']; // Valeur d'erreur de l'image
            //Enregistrement image dans dossier services
            if($imgError === 0) {
                $destination =  dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'pictures' . DIRECTORY_SEPARATOR . 'services' . DIRECTORY_SEPARATOR . $imgName;
                move_uploaded_file($imgTempName, $destination);
            } else {
                echo "Erreur lors de l'enregistrement de l'image";
            }
            $title = $_POST['titleModif'];
            $img_path = '/public/pictures/services/' . $imgName;
            $description = $_POST['descriptionModif'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':title', $title, \PDO::PARAM_STR);
            $stmt->bindValue(':img_path', $img_path, \PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, \PDO::PARAM_STR);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR MODIFICATION SERVICE';
            }
        }
    }

    /**
     * supprime un service
     * 
     * Cette méthode supprime un service.
     * 
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return void
     */
    public function delService($pdo): void
    {
        // Requête SQL pour récupérer les services
        $sql = "DELETE FROM service WHERE title = :title;";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['delItem'])) {
            $delItem = $_POST['delItem'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':title', $delItem, \PDO::PARAM_STR);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR SUPPRESSION SERVICE';
            }
        }
    }
}