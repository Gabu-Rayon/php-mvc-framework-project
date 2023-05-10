<?php

namespace app\core;

class Application{

    public Router $router;
    public function __construct(){
        
        $this->router = new Router(); 
    }


    public function run(){
           ///Code Here
        $this->router->resolve();
    }
}