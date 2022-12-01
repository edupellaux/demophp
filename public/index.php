<?php

require '../vendor/autoload.php';
require '../routes/web.php';

use Pecee\SimpleRouter\SimpleRouter;

// Enregistrement du namespace par défaut des controllers
SimpleRouter::setDefaultNamespace('\DemoPHP\Controllers');

// Lancement du router
SimpleRouter::start();
