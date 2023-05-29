<?php


namespace app\core;


class Session
{
    protected const FLASH_KEY = 'flash_messages';
    public function __construct()
    {
        session_start();

        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach ($flashMessages as $key => &$flashMessage) {

             //MARK TO BE REMOVED
            $flashMessage['remove'] = true;
        }
    }
    public function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [

            'remove' => false,

            'value' => $message
        ];
    }

    public function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    public function __destruct()
    {

        //Iterate All Marked to be removed

        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach ($flashMessages as $key => &$flashMessage) {
            
            if ($flashMessage['remove']) {
                
                unset($flashMessages[$key]);
            }
        }
        
        
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}