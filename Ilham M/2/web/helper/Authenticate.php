<?php

class Authenticate{
    public static function regenerateSession($user)
    {
        session_start();
        $_SESSION['user'] = $user;   
    }
    public function user(){
        session_start();
        return $_SESSION['user'];
    }
    public function check()
    {
        session_start();
        if(isset($_SESSION['user'])){
            return true;
        }
        return false;
    }
    public function logout()
    {
        session_start();
        session_destroy();
    }
}