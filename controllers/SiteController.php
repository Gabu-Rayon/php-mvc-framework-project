<?php

namespace  app\controllers;



class SiteController{
    
   public function home(){

        $params = [
            'user' => "Rayon"
        ];

       return Application::$app->router->renderView('home',$params);
    }

    public function handleContact(){

       return Application::$app->router->renderView('contact');
    }
}