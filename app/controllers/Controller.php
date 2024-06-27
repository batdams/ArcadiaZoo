<?php

namespace controllers;

use views\ViewManager;

class Controller
{
    protected ViewManager $viewManager;
    protected \PDO $pdo;
    protected $data = [];

    public function __construct(ViewManager $viewManager, \PDO $pdo)
    {
        $this->viewManager = $viewManager;
        $this->pdo = $pdo;
        $this->initializeData();
    }

    protected function initializeData() {
        $this->data['services'] = ServiceController::displayService($this->pdo);
        $this->data['habitats'] = HabitatController::displayHabitat($this->pdo);
        $this->data['breeds'] = AnimalController::displayBreed($this->pdo);
        $this->data['animals'] = AnimalController::displayAnimal($this->pdo);
        $this->data['hours'] = InfoController::displayHours($this->pdo);
        $this->data['views'] = HomeController::displayViews($this->pdo);
        $this->data['validViews'] = HomeController::displayViewsValid($this->pdo);
    }
}