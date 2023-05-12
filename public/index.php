<?php

use app\core\Application;
use app\controllers\SiteController;

require_once __DIR__ . '/../vendor/autoload.php';


 $app = new Application(dirname(__DIR__));
 
$app->router->get('/', 'home');

// $app->router->post('home',[SiteController::class,'home']);
$app->router->get('/home',[new SiteController(),'home']);  //to this



$app->router->get('/contact','contact');

// $app->router->post('/contact',[SiteController::class,'contact']);
$app->router->post('/contact',[new SiteController(),'handleContact']);  //to this

$app->run();