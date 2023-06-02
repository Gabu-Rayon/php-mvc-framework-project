<?php

namespace app\core\middlewares;

use app\core\Application;

class AuthMiddleware extends BaseMiddleware
{

    public array $actions = [];
 
      /**
       * @param array $actions
       */
      public function __construct(array $actions){

        $this->actions = $actions;
        
      }
    public function execute(){
        
        if (Application::isGuest()) {
            
            
        }
    }
}