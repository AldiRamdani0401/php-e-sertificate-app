<?php

require_once __DIR__ . '/../vendor/autoload.php';

use AldiRamdani\E\Sertificate\App\Router;
use AldiRamdani\E\Sertificate\Controller\HomeController;
use AldiRamdani\E\Sertificate\Controller\GeneralUserController;

// HomeController
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/register', HomeController::class, 'register');
Router::add('GET', '/login', HomeController::class, 'login');

// GeneralUserController
Router::add('GET', '/cek-sertifikat', GeneralUserController::class, 'index');

Router::run();