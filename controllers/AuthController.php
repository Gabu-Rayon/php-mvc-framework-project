<?php

namespace  app\controllers;

use app\core\Request;
use app\core\Controller;
use app\models\RegisterModel;


class AuthController extends Controller{
    

     public function login(){

      $this->setLayout('auth');
      
        return $this->render('login');
     }

      public function register(Request $request){

      $registerModel = new RegisterModel();

        if ($request->isPost()) {
          
         $registerModel->loadData($request->getBody());
      
            if ($registerModel->validate() && $registerModel->register()) {
            return 'Success';
            }

             echo '<pre>';
            var_dump($registerModel->errors);
            echo '</pre>';
            
              return $this->render('register', ['model' => $registerModel]);


        }
         $this->setLayout('auth');
        return $this->render('register',['model' => $registerModel]);
     }
}