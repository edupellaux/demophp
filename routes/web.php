<?php

use Pecee\SimpleRouter\SimpleRouter;
use DemoPHP\Controllers\IndexController;
use DemoPHP\Controllers\TestController;

SimpleRouter::get('/', [IndexController::class, 'index']);
SimpleRouter::get('/test/show/{name?}', [TestController::class, 'show']);
