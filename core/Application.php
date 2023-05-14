<?php
/**
 * Summary of Applocation Class
 * 
 */
namespace app\core;

class Application{


    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    public static Application $app;
    
    public function __construct($rootPath){

        self::$ROOT_DIR = $rootPath;

        self::$app = $this; 
        $this->request = new Request();
        $this->response = new Response();
         //to handle response and Request
        $this->router = new Router($this->request,$this->response);
       
    }


    public function run(){
           ///Code Here
      echo   $this->router->resolve();
    }
}