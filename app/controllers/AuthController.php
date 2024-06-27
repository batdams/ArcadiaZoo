<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';
require_once '../app/controllers/ServiceController.php';
require_once '../app/models/User.php';

use \PDO; // Ajout de l'utilisation de la classe PDO
use \models\User;

class AuthController extends Controller
{
    /**
   * Connecte un utilisateur à l'application
   * 
   * Cette méthode vérifie les informations d'identification fournies par l'utilisateur et connecte l'utilisateur à l'application.
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la base de données.
   * @return void
   */
  public function userConnect($pdo)
  {
    $sql = 'SELECT * FROM app_user WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
    if (isset($_POST["email"]) && isset($_POST["password"])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $stmt->bindValue(':email', $email, PDO::PARAM_STR);
      if ($stmt->execute()) {
        $user = $stmt->fetch();
        if ($user !== false && password_verify($password, $user->getPassword())) {
          $_SESSION['mail'] = $user->getEmail();
          $_SESSION['role'] = $user->getRole_id();
          $_SESSION['name'] = $user->getFirstname();
          if($_SESSION['mail'] === "josebu@arcadia.com"){
            $_SESSION['role'] = 'superAdmin';
            setcookie("user", "administrateur", time() + 3600, '/'); // création cookie superAdmin
          $this->viewManager->renderData('bodies/connectedAdmin.php', $this->data);
          } else if ($_SESSION['role'] === 2){
            $_SESSION['role'] = 'vet';
            setcookie("user", "vet", time() + 3600, '/'); // création cookie vet
            $this->viewManager->renderData('bodies/connectedVet.php', $this->data);
          } else if ($_SESSION['role'] === 3){
            $_SESSION['role'] = 'employee';
            setcookie("user", "employee", time() + 3600, '/'); // création cookie vet
            $this->viewManager->renderData('bodies/connectedEmployee.php', $this->data);
          }        
        } else {
          echo 'Utilisateur non inscrit ou erreur dans l\'adresse mail';
        }
      }
    }
  }

    /**
   * Déconnecte un utilisateur de l'application
   * 
   * Cette méthode déconnecte l'utilisateur de l'application en supprimant ses informations de session.
   * 
   * @return void
   */
  public function userDisconnect()
  {
    unset($_SESSION['role']);
    setcookie("user", "", time() - 3600, '/');
    $this->viewManager->renderData('bodies/home.php', $this->data);
  }

    /**
   * Connecte un utilisateur à l'application
   * 
   * Cette méthode vérifie les informations d'identification fournies par l'utilisateur et connecte l'utilisateur à l'application.
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la base de données.
   * @return void
   */
  public function userVerifConnect()
  { 
    if($_SESSION['role'] === 'superAdmin') {
      $this->viewManager->renderData('bodies/connectedAdmin.php', $this->data);
    } else if ($_SESSION['role'] === 'vet'){
      $this->viewManager->renderData('bodies/connectedVet.php', $this->data);
    } else if ($_SESSION['role'] === 'employee'){
      $this->viewManager->renderData('bodies/connectedEmployee.php', $this->data);
    } else {
          echo 'Utilisateur non inscrit ou erreur dans l\'adresse mail';
    };
  }
}