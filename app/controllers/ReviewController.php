<?php

namespace controllers;

// Inclusion des classes
require_once 'app/controllers/Controller.php';

class ReviewController extends Controller
{
     /**
     * Valide un avis utilisateur
     * 
     * Cette méthode valide un avis utilisateur
     * 
     * @param PDO
     * @return void
     */
    public function confirmReview($pdo): void
    {
        // Requête SQL pour valider les avis
        $sql = "UPDATE view SET is_valide = :is_valide WHERE view_id = :id";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['id']) && isset($_POST['is_valide'])) {
            // Récupération des données via la superglobale $_POST
            $id = $_POST['id'];
            $isValide = $_POST['is_valide'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
            $stmt->bindValue(':is_valide', $isValide, \PDO::PARAM_INT);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                echo 'OK';
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR: Données manquantes';
            }
        }
    }

    /**
     * Supprime un avis utilisateur
     * 
     * Cette méthode supprime un avis utilisateur
     * 
     * @param PDO
     * @return void
     */
    public function deleteReview($pdo): void
    {
        // Requête SQL pour valider les avis
        $sql = "DELETE FROM view WHERE view_id = :id";
        // Préparation de la requête SQL
        $stmt = $pdo->prepare($sql);
        // Vérification de la présence des données
        if (isset($_POST['id'])) {
            // Récupération des données via la superglobale $_POST
            $id = $_POST['id'];
            // Liaison des données aux marqueurs nommés
            $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
            // Execution de la requête
            if ($stmt->execute()) {
                // Redirection vers la page Admin
                echo 'OK';
            } else {
                // En cas d'erreur lors de l'execution
                echo 'ERREUR: Données manquantes';
            }
        }
    }
}