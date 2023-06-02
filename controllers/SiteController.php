<?php

namespace  app\controllers;

use app\core\Request;
use app\core\Response;
use app\core\Controller;
use app\core\Application;
use app\models\ContactForm;



class SiteController extends Controller {
    
   public function home(){

      
        $params = [
            'name' => "Rayon"
        ];

       return $this->render('home',$params);
    }
public function contact(Request $request,Response $response){
   
      $contact = new ContactForm();

      if ($request->isPost()) {

         $contact->loadData($request->getBody());

         if ($contact->validate() && $contact->send()) {

            Application::$app->session->setFlash('success','Thanks for contacting us. We will reply to you soon');

            return $response->redirect('/contact');

         }

      }
      
      
       return $this->render('contact',['model' => $contact]);
    }
}