<?php 


namespace app\models;

use app\core\Model;
use app\models\User;
use app\core\Application;
use app\core\DbModel;

 class LoginForm extends Model{
    

     public string  $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED,self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Your Email address',
            'password' => 'Password'
        ];
    }
     public function login(){


        // Create an instance of DbModel
        // $dbModel = new DbModel();

        // Call the findOne method on the $dbModel object
        // $user = $dbModel->findOne(['email' => $this->email]);

        $user = User::findOne(['email' => $this->email]);
        
        if (!$user) {
            
            $this->addError('email', 'User does not exist with this email address');
           
            return false;
        }
        if (!password_verify($this->password, $user->password)) {

            $this->addError('password', 'Password is incorrect');

            return false;
        }

        return Application::$app->login($user);
    }
 }