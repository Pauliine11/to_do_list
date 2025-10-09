<?php
require_once(__DIR__ . '/../vendor/autoload.php');
session_start();
use Config\Router;

$router = new Router;

$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/ajouterTache', 'TaskController', 'addTache');
$router->addRoute('/tache', 'TaskController', 'index');
$router->addRoute('/404', 'ErrorController', 'notFound');
$router->addRoute('/modifier', 'TaskController', 'editTask');
$router->handleRequest();