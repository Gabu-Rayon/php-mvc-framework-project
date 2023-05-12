<?php

namespace  app\controllers;

use app\core\Controller;



class SiteController extends Controller {
    
   public function home(){

        $params = [
            'user' => "Rayon"
        ];

       return $this->render('home',$params);
    }

    public function handleContact(){

       return $this->render('contact');
    }
}