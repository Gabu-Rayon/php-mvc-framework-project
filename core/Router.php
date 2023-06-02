<?php

namespace app\core;
use app\core\exception\NotFoundException;
class Router
{
    public Request $request;

     public Response $response;
    protected array $routes = [];


    public function __construct(Request $request,Response $response)
    {
        $this->request = $request;

        $this->response = $response;
    }
    public function get( $path,$callback,)
    {
        ///Code Here
        $this->routes['get'][$path] = $callback;
    }
      public function post( $path,$callback,)
    {
        ///Code Here
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();

        $method =  $this->request->method();
        
        $callback = $this->routes[$method][$path] ?? false;

        
        if ($callback  === false) {
            
            throw new NotFoundException();

            // return $this->("Not Found Exception");

        }
         if (is_string($callback)) {

            return Application::$app->view->renderView($callback);

        }

        if (is_array($callback)) {
            /**
             * @var \app\core\Controller $controller
             */
            $controller = new $callback[0];

            $controller->action = $callback[1];

            Application::$app->controller = $controller;

            $middlewares = $controller->getMiddlewares();

            foreach ($middlewares as $middleware) {

                $middleware->execute();

            }
            
            $callback[0] = $controller;
        }

         return call_user_func($callback,$this->request,$this->response);
    }
  
}