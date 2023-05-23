<?php

namespace  app\controllers;

use app\core\Request;
use app\core\Controller;


class AuthController extends Controller{
    

     public function login(){

      $this->setLayout('auth');
      
        return $this->render('login');
     }

      public function register(Request $request){
        
        if ($request->isPost()) {
            
            return 'Handle  Submitted data ';
        }
         $this->setLayout('auth');
        return $this->render('register');
     }
}