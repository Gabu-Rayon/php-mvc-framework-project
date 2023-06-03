<?php
/**
 * Summary of Application Class
 * 
 */
namespace app\core;

use app\core\db\DbModel;
use app\core\db\Database;

class Application{


    public static string $ROOT_DIR;

    public string $layout = 'main';
    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
     
    public Session $session;
    public Database $db;

    // ? coz it maybe null
    public ?UserModel $user;
    public View $view;
    public static Application $app;
    public ?Controller $controller = null;
    public function __construct($rootPath,array $config){

        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this; 
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
         //to handle response & Request
        $this->router = new Router($this->request,$this->response);
        $this->view = new View();
       
        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('user');
        if ($primaryValue) {
          $primaryKey = $this->userClass::primaryKey();
          $this->user =  $this->userClass::findOne([$primaryKey => $primaryValue]);
         
        }else{
            
            $this->user = null;
            
        }
       
    }


    public function getController():\app\core\Controller{
        
        return $this->controller;
    }

     public function setController(\app\core\Controller $controller):  void {
        
        $this->controller = $controller;
    }

    public function login(UserModel $user){

        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
        

    }
    public static function isGuest(){
        return !self::$app->user;
    }
    public function logout(){

        $this->user = null;

        $this->session->remove('user');

    }
    public function run(){

        // $this->triggerEvent(self::EVENT_BEFORE_REQUEST);
        
        try {
            
            echo $this->router->resolve();
            
        } catch (\Exception $e) {

            $this->response->setStatusCode($e->getCode());

            echo $this->view->renderView('_error', [
                
                'exception' => $e,
                
            ]);
        }
    }
}