<?php 


namespace app\core;

class Controller{

    public string $layout = 'main';

    public array $middlewares = [];
    
     public function setLayout($layout){
        
         $this->layout = $layout;
     }
    public function render($view,$params=[]){
      
        return Application::$app->router->renderView($view, $params);
    }
    
    public function registerMiddleware(){
        
    }
}