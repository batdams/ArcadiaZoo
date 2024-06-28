<?php

namespace controllers;

// Inclusion des classes
require_once 'app/controllers/Controller.php';
//require_once '../app/controllers/ServiceController.php';
//require_once '../app/controllers/HabitatController.php';

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     * 
     * Cette méthode affiche la page d'accueil de l'application.
     * 
     * @return void
     */
    public function index($pdo): void
    { 
    // Utilisation de la fct static displayService()
    $this->viewManager->renderData('bodies/home.php', $this->data);
    }

    /**
     * Affiche la page de connexion
     * 
     * Cette méthode affiche la page de connexion de l'application.
     * 
     * @return void
     */
    public function connexion(): void
    { 
    $this->viewManager->render('bodies/connexion.html');
    }

    /**
     * Ajoute un avis visiteur
     * 
     * Cette méthode ajoute un avis de visiteur via le formulaire de la page d'accueil.
     * 
     * @param PDO
     * @return void
     */
    public function addView($pdo): void
    {
    // Requête SQL pour l'insertion d'un avis
    $sql = "INSERT INTO view (nickname, view_message) VALUES (:nickname, :view_message)";
    // Préparation de la requête SQL (Mise en mémoire pour la manipuler via PDOStatement)
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST['nickname']) && isset($_POST['viewMessage'])) {
        // Récupération des données via les superglobales $_POST
        $nickname = $_POST['nickname'];
        $viewMessage = $_POST['viewMessage'];
        // Liaison des données aux marqueurs nommés
        $stmt->bindValue(':nickname', $nickname, \PDO::PARAM_STR);
        $stmt->bindValue(':view_message', $viewMessage, \PDO::PARAM_STR);
        // Execution de la requête
        if ($stmt->execute()) {
            // Redirection vers la page Admin
            $this->viewManager->renderData('bodies/home.php', $this->data);
            } else {
            // En cas d'erreur lors de l'execution
            echo 'ERREUR INSERTION AVIS';
            }
        }
    }
    /**
     * Mise à jour des avis pour l'affichage de la page d'accueil
     * 
     * Cette méthode met à jour les avis pour les afficher dans la vue
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayViews($pdo): array
    {
        // Requête SQL pour récupérer les avis
        $sql = "SELECT nickname, view_message, view_id FROM view WHERE is_valide = 0";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        if($stmt->execute()){
            $views = $stmt->fetchAll();
            return $views;
        } else {
            return null;
        }
    }
    /**
     * Mise à jour des avis pour l'affichage de la page d'accueil
     * 
     * Cette méthode met à jour les avis pour les afficher dans la vue de la page d'accueil
     * @param PDO $pdo Instance PDO pour la connexion à la base de données
     * @return array
     */
    public static function displayViewsValid($pdo): array
    {
        // Requête SQL pour récupérer les animaux
        $sql = "SELECT nickname, view_message, is_valide FROM view WHERE is_valide = 1";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        if($stmt->execute()){
            $views = $stmt->fetchAll();
            return $views;
        } else {
            return null;
        }
    }
}