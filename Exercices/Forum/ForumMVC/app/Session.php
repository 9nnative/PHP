<?php

namespace App;

abstract class Session {

public static function getUser(){
    return isset($_SESSION["user"]) ? $_SESSION["user"] : null;
    
 }

 public static function addMessage($type, $text){
    if(!isset($_SESSION['msg'][$type])){
        $_SESSION["msg"][$type] = [];
    }
    
    $_SESSION['msg'][$type][] = $text;
}
}