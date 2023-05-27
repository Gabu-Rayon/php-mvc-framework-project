<?php

namespace  app\controllers;

use app\models\User;
use app\core\Request;
use app\core\Controller;
use app\core\Application;


class AuthController extends Controller{
    

     public function login(){

      $this->setLayout('auth');
      
        return $this->render('login');
     }

      public function register(Request $request){

      $user = new User();

        if ($request->isPost()) {
          
         $user->loadData($request->getBody());
      
            if ($user->validate() && $user->save()) {

           Application::$app->session->setFlash('success', 'You are successfully registered');
           Application::$app->response->redirect('/');

            
            }
              return $this->render('register', ['model' => $user]);


        }
         $this->setLayout('auth');
        return $this->render('register',['model' => $user]);
     }
}