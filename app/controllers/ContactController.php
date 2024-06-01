<?php

namespace controllers;

// Inclusion des classes
require_once '../app/controllers/Controller.php';

class ContactController extends Controller
{
    /**
     * Affiche la page de contact
     * 
     * Cette méthode affiche la page de contact de l'application.
     * 
     * @return void
     */
    public function index(): void
    { 
    $this->viewManager->render('bodies/contact.html');
    }
}