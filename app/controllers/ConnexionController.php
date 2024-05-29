<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';

class ConnexionController extends Controller
{
    /**
     * Affiche la page de connexion
     * 
     * Cette méthode affiche la page de connexion de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/connexion.html');
    }
}