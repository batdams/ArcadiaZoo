<?php

namespace controllers;

use views\ViewManager;

class Controller
{
    protected ViewManager $viewManager;

    public function __construct(ViewManager $viewManager)
    {
        $this->viewManager = $viewManager;
    }
}