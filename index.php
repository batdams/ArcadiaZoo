<?php
session_start();

// Affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Récupération de la config pour la connexion à la BDD
require_once 'app/config/config.php';

// Définition de la constante pour l'URL
define("BASE_URL", '/ArcadiaZoo');

// Inclusion des classes
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/HabitatController.php';
require_once 'app/controllers/ServiceController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/ContactController.php';
require_once 'app/controllers/InfoController.php';
require_once 'app/controllers/ReviewController.php';

require_once 'app/views/ViewManager.php';
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/AnimalController.php';

// Ajout du routeur
require_once 'app/models/Router.php';

// Instanciation du routeur
$router = new \routing\Router();

// Définition de la route initiale
$router->addRoute('GET','/', 'HomeController', 'index');

// création de nouvelles routes
// HomeController
$router->addRoute('GET',BASE_URL . '/accueil', 'HomeController', 'index');
$router->addRoute('POST', '/public/leaveView', 'HomeController', 'addView');
// AnimalController
$router->addRoute('POST', '/public/addAnimal', 'AnimalController', 'addAnimal');
$router->addRoute('POST', '/public/modifAnimal', 'AnimalController', 'modifAnimal');
$router->addRoute('POST', '/public/delAnimal', 'AnimalController', 'delAnimal');
// HabitatController
$router->addRoute('GET', BASE_URL . '/habitats', 'HabitatController', 'index');
$router->addRoute('POST', '/public/addHabitat', 'HabitatController', 'addHabitat');
$router->addRoute('POST', '/public/modifHabitat', 'HabitatController', 'modifHabitat');
$router->addRoute('POST', '/public/delHabitat', 'HabitatController', 'delHabitat');
// ServiceController
$router->addRoute('GET', BASE_URL . '/services', 'ServiceController', 'index');
$router->addRoute('POST', '/public/addService', 'ServiceController', 'addService');
$router->addRoute('POST', '/public/modifService', 'ServiceController', 'modifService');
$router->addRoute('POST', '/public/delService', 'ServiceController', 'delService');
// ContactController
$router->addRoute('POST', BASE_URL . '/form', 'ContactController', 'sendMail');
// UserController
$router->addRoute('POST', '/public/addAccount', 'UserController', 'addUser');
$router->addRoute('GET', BASE_URL . '/contact', 'ContactController', 'index');
$router->addRoute('GET', '/public/connexion', 'HomeController', 'connexion');
$router->addRoute('POST', '/public/login', 'AuthController', 'userConnect');
$router->addRoute('GET', '/public/logout', 'AuthController', 'userDisconnect');
$router->addRoute('GET', BASE_URL . '/connected', 'AuthController', 'userVerifConnect');
// InfoController
$router->addRoute('GET', '/public/hours', 'InfoController', 'index');
$router->addRoute('GET', '/public/about', 'InfoController', 'indexAbout');
$router->addRoute('POST', '/public/hoursModif', 'InfoController', 'modifService');
// ReviewController
$router->addRoute('POST', '/public/confirmReview', 'ReviewController', 'confirmReview');
$router->addRoute('POST', '/public/deleteReview', 'ReviewController', 'deleteReview');

// Récupération des informations de la requête via la super variable $_SERVER 
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Récupération du handler associé à la requête
$handler = $router->getHandler($method, $uri);
if ($handler == null) {
    header('HTTP/1.1 404 Not Found');
    exit();
}

// Instanciation du ViewManager
$viewManager = new \views\ViewManager();

// Appel du contrôleur associé à la requête
$controllerClassName = $handler['controller'];
$controllerClassName = '\controllers\\' . $controllerClassName;
$pdo = new PDO($mySQLDSN, $config['username'], $config['password']);
$controller = new $controllerClassName($viewManager, $pdo);
$action = $handler['action'];
$controller->$action($pdo);
/*if ($controllerClassName == 'HomeController') {
    $controller->$action();
} else {
    $controller->$action($pdo);
}*/