<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    public function get($callback, $path)
    {
        ///Code Here
        $this->routes['get']['$path'] = $callback;
    }

    public function resolve(){
        
    }
}