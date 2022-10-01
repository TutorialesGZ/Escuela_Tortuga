<?php

class UserSession{
    public function __construct(){
        session_start();
    }

    public function setUsuario($user){
        $_SESSION['user'] = $user;
    }

    public function getUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>