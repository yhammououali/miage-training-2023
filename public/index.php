<?php

require_once '../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->addRoute('home', 'HomeController');
$router->addRoute('contact', 'ContactController');
$router->addRoute('post', 'PostController');

$router->matchRoute($_GET['page'], $_GET['action'] ?? null);
