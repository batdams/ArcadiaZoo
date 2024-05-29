<?php

// Inclusion des classes
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/ConnexionController.php';
require_once '../app/views/ViewManager.php';

// Ajout du routeur
require_once '../app/models/Router.php';

// Instanciation du routeur
$router = new \routing\Router();

// Définition de la route initiale
$router->addRoute('GET', '/public/index.php', 'HomeController', 'index');

// création de nouvelles routes 
$router->addRoute('GET', '/public/connexion', 'ConnexionController', 'index');

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
$action = $handler['action'];
$controller = new $controllerClassName($viewManager);
$controller->$action();