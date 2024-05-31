<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     * 
     * Cette méthode affiche la page d'accueil de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/home.html');
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