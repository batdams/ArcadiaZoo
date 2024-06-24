<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';
require_once "../app/models/Hour.php";

class InfoController extends Controller
{
    /**
     * Mise à jour de l'horaire pour l'affichage
     * 
     * Cette méthode met à jour les horaires pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayHours($pdo): array
    {
        // Requête SQL pour récupérer les horaires
        $sql = "SELECT hours_id, day_of_week, opening_time, closing_time FROM zoo_hours";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Hours');
        if($stmt->execute()){
            $hours = $stmt->fetchAll();
            return $hours;
        } else {
            return null;
        }
    }

    /**
     * Affiche la page infos
     * 
     * Cette méthode affiche la page infos de l'application.
     * 
     * @return void
     */
    public function index($pdo): void
    {
    $this->viewManager->renderData('bodies/infos.php', $this->data);
    }

    /**
     * Affiche la page CGU
     * 
     * Cette méthode affiche la page CGU de l'application.
     * 
     * @return void
     */
    public function indexAbout($pdo): void
    {
    $this->viewManager->renderData('bodies/about.php', $this->data);
    }

    /**
     * Modifie un horaire
     * 
     * Cette méthode modifie un horaire.
     * 
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return void
     */
    public function modifService($pdo): void
    {
        // Requête SQL pour modifier les horaires
        $sql = "UPDATE zoo_hours
                SET opening_time = :opening_time, closing_time = :closing_time
                WHERE day_of_week = :day_of_week
                ";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['day_of_week']) && isset($_POST['opening_time']) && isset($_POST['closing_time'])) {
            // Récupération des données via la superglobale $_POST
            $dayOfWeek = $_POST['day_of_week'];
            $openingTime = $_POST['opening_time'];
            $closingTime = $_POST['closing_time'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':day_of_week', $dayOfWeek, \PDO::PARAM_INT);
            $stmt->bindValue(':opening_time', $openingTime, \PDO::PARAM_STR);
            $stmt->bindValue(':closing_time', $closingTime, \PDO::PARAM_STR);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                $this->data['hours'] = InfoController::displayHours($this->pdo);
                $this->viewManager->renderData('bodies/connectedAdmin.php', $this->data);
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR INSERTION SERVICE';
            }
        }
    }
}