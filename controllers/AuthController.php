<?php

namespace  app\controllers;

use app\core\Request;
use app\core\Controller;



class AuthController extends Controller{
    

     public function login(){
        
        return $this->render('login');
     }

      public function register(Request $request){
        
        if ($request->isPost()) {
            
            return 'Handle  Submitted data ';
        }
        return $this->render('register');
     }
}