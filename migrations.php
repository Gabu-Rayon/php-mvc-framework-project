<?php

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;

require_once __DIR__ . '/vendor/autoload.php';

//package required for migration configuration
$dotenv =  Dotenv\Dotenv::createImmutable(__DIR__);

// $dotenv = new  \Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

//migration configuration
$config = [

  'db' =>[
      'dsn' => $_ENV['DB_DSN'],

      'user' => $_ENV['DB_USER'],

      'password' => $_ENV['DB_PASSWORD']
  ]

];

 $app = new Application(__DIR__, $config);

$app->db->applyMigrations();