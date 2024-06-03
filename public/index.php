<?php
session_start();
// Récupération de la config pour la connexion à la BDD
require_once '../app/config/config.php';

// Inclusion des classes
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/HabitatController.php';
require_once '../app/controllers/ServiceController.php';
require_once '../app/controllers/ContactController.php';
require_once '../app/views/ViewManager.php';
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/AnimalController.php';

// Ajout du routeur
require_once '../app/models/Router.php';

// Instanciation du routeur
$router = new \routing\Router();

// Définition de la route initiale
$router->addRoute('GET', '/public/index.php', 'HomeController', 'index');

// création de nouvelles routes
$router->addRoute('GET', '/public/habitats', 'HabitatController', 'index');
$router->addRoute('GET', '/public/services', 'ServiceController', 'index');
$router->addRoute('GET', '/public/contact', 'ContactController', 'index');
$router->addRoute('GET', '/public/connexion', 'HomeController', 'connexion');
$router->addRoute('POST', '/public/login', 'AuthController', 'userConnect');
$router->addRoute('GET', '/public/logout', 'AuthController', 'userDisconnect');
$router->addRoute('GET', '/public/connected', 'AuthController', 'userVerifConnect');
$router->addRoute('POST', '/public/addService', 'ServiceController', 'addService');

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
$controller = new $controllerClassName($viewManager);
$action = $handler['action'];
$pdo = new PDO($mySQLDSN, $config['username'], $config['password']);
$controller->$action($pdo);
/*if ($controllerClassName == 'HomeController') {
    $controller->$action();
} else {
    $controller->$action($pdo);
}*/