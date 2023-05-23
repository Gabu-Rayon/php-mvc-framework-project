<?php

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;

require_once __DIR__ . '/../vendor/autoload.php';


 $app = new Application(dirname(__DIR__));

 
$app->router->get('/', [new SiteController(), 'home']);
// $app->router->post('home',[SiteController::class,'home']);
$app->router->get('/home',[new SiteController(),'home']);  //to this

$app->router->get('/contact',[new SiteController() ,'contact']);
// $app->router->post('/contact',[SiteController::class,'contact']);
$app->router->post('/contact',[new SiteController(),'handleContact']);  //to this

$app->router->get('/login',[new AuthController() ,'login']);
$app->router->post('/login',[new AuthController() ,'login']);

$app->router->get('/register',[new AuthController() ,'register']);
$app->router->post('/register',[new AuthController() ,'register']);

$app->run();