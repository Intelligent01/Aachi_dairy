<?php
class Session{
    public static function start(){
        session_start();
    }

    public static function destroy(){
        session_destroy();
    }

    public static function unset(){
        session_unset();
    }

    public static function set($key,$value){
        $_SESSION[$key]=$value;
    }

    public static function delete($key){
        session_unset($key);
    }

    private static function isset($key){
        return isset($_SESSION[$key]);
    }

    public static function get($key,$default=false){
        if(self::isset($key)){
            return $_SESSION[$key];
        }else return $default;
    }
}