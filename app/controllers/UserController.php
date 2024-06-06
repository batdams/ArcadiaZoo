<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';
require_once "../app/models/User.php";

class UserController extends Controller

{
    /**
     * Ajoute un compte utilisateur
     * 
     * Cette méthode ajoute un compte utilisateur.
     * 
     * @param PDO
     * @return void
     */
    public function addUser($pdo): void
    {
    // Requête SQL pour l'insertion d'un compte utilisateur
    $sql = "INSERT INTO app_user (firstname, lastname, password, email, role_id) VALUES (:firstname, :lastname, :password, :email, :role_id)";
    // Préparation de la requête SQL (Mise en mémoire pour la manipuler via PDOStatement)
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST['firstnameAccount']) && isset($_POST['lastnameAccount']) && isset($_POST['pwdAccount']) && isset($_POST['emailAccount']) && isset($_POST['accountRole'])) {
        // Récupération des données via les superglobales $_POST
        $firstname = $_POST['firstnameAccount'];
        $lastname = $_POST['lastnameAccount'];
        $password = $_POST['pwdAccount'];
        $email = $_POST['emailAccount'];
        $role_id = $_POST['accountRole'];
        // Liaison des données aux marqueurs nommés
        $stmt->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
        $stmt->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), \PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, \PDO::PARAM_STR);
        $stmt->bindValue(':role_id', $role_id, \PDO::PARAM_INT);
        // Execution de la requête
        if ($stmt->execute()) {
            // Redirection vers la page Admin
            $this->viewManager->render('bodies/connectedAdmin.php');
            } else {
            // En cas d'erreur lors de l'execution
            echo 'ERREUR INSERTION SERVICE';
            }
        }
        /*
        var_dump($_POST['firstnameAccount']);
        var_dump($_POST['lastnameAccount']);
        var_dump($_POST['pwdAccount']);
        var_dump($_POST['emailAccount']);
        var_dump($_POST['accountRole']);
        $this->viewManager->render('bodies/connectedAdmin.php');
        */
    }
}