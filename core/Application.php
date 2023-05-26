<?php
/**
 * Summary of Application Class
 * 
 */
namespace app\core;

class Application{


    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    public Database $db;

    public static Application $app;
    public Controller $controller;
    public function __construct($rootPath){

        self::$ROOT_DIR = $rootPath;

        self::$app = $this; 
        $this->request = new Request();
        $this->response = new Response();
         //to handle response & Request
        $this->router = new Router($this->request,$this->response);
        $this->db = new Database();
    }


    public function getController():\app\core\Controller{
        
        return $this->controller;
    }

     public function setController(\app\core\Controller $controller):  void {
        
        $this->controller = $controller;
    }


    public function run(){
           ///Code Here
      echo   $this->router->resolve();
    }
}