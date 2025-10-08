<?php
require_once(__DIR__ . '/../vendor/autoload.php');
session_start();
use Config\Router;

$router = new Router;

$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/ajouterTache', 'ToDoController', 'addTache');
$router->addRoute('/tache', 'ToDoController', 'index');

$router->handleRequest();