<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';

class ServiceController extends Controller
{
    /**
     * Affiche la page des services
     * 
     * Cette méthode affiche la page services de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/services.html');
    }
}