<?php

namespace app\core\middlewares;

abstract class AuthMiddleware extends BaseMiddleware
{
    abstract public function execute();
    
}