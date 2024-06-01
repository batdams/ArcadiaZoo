<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';

class HabitatController extends Controller
{
    /**
     * Affiche la page des habitats
     * 
     * Cette méthode affiche la page habitats de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/habitats.html');
    }
}