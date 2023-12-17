<?php

require_once '../vendor/autoload.php';

use App\Router;

$router = new Router();

$router->addRoute('home', 'HomeController');
$router->addRoute('contact', 'ContactController');
$router->addRoute('post', 'PostController');

//$router->matchRoute($_GET['page'], $_GET['action'] ?? null);

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);
