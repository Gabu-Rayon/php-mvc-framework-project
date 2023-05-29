<?php 


namespace app\models;

use app\core\Model;


 class LoginForm extends Model{
    

     public string  $email = '';
    public string $password = '';

    public function rules(){
        
    }
 }