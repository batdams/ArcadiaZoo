<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';
require_once '../app/controllers/ServiceController.php';
require_once '../app/controllers/HabitatController.php';

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
    $data = ['services' => ServiceController::displayService($pdo)];
    $data['habitats'] = HabitatController::displayHabitat($pdo);
    $this->viewManager->renderData('bodies/home.php', $data);
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
}