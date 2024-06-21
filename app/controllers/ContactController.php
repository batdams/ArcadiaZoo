<?php

namespace controllers;

use PDOException;
use \SendGrid\Mail\Mail;

// Inclusion des classes
require '../vendor/autoload.php';
require_once '../app/config/config.php';
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
    $data = [];
    $this->viewManager->renderData('bodies/contact.php', $data);
    }

    /**
     * fonction d'envoie de mail
     * 
     * Cette méthode envoie un mail à l'adresse mail de contact du zoo et retourne sur le formulaire de contact
     * en affichant un récapitulatif du mail
     * 
     * @return void
     */
    function sendMail() 
    {
    global $configSendGrid;

    if (isset($_POST['titleContactForm']) && isset($_POST['descriptionContactForm']) && isset($_POST['mailContactForm'])) {
        $formTitle = htmlspecialchars($_POST['titleContactForm']);
        $formDescription = $_POST['descriptionContactForm'];
        $formMail = htmlspecialchars($_POST['mailContactForm']);

        $apiKey = $configSendGrid['apiKey'];  // clé API SendGrid
        $emailFrom = $configSendGrid['verifiedSenderAddress'];  // adresse e-mail vérifiée sendgrid
        $email = new Mail();
        // verified sender
        $email->setFrom($emailFrom,$formMail);
        $email->setSubject($formTitle);
        // Replace the email address and name with your recipient
        $email->addTo($configSendGrid['verifiedReceiverAddress']);
        $email->addContent("text/plain",$formDescription);
        $sendgrid = new \SendGrid($apiKey);
        try {
            $response = $sendgrid->send($email);
        } catch (PDOException $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }        
        $data = [];
        $this->viewManager->renderData('bodies/contact.php', $data);
        }
    }

    /*
    public function sendMail(): void
    { 
        global $configMail;

        if (isset($_POST['titleContactForm']) && isset($_POST['descriptionContactForm']) && isset($_POST['mailContactForm'])) {
            $formTitle = htmlspecialchars($_POST['titleContactForm']);
            $formDescription = htmlspecialchars($_POST['descriptionContactForm']);
            $formMail = htmlspecialchars($_POST['mailContactForm']);
            
            $message = [$formDescription];
            $this->viewManager->renderData('bodies/contact.php', $message);
        } else {
            
        }
    }*/
}