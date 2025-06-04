<?php
class Session {
    public static function init(){
        session_start();
    }

    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function destroy(){
        session_destroy();
    }

    public static function clear($key){
        unset($_SESSION[$key]);
    }

    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
    public static function checksession(){
        self::init();
        if(self::get('login')==false || self::get('isadmin')==0){
            self::destroy();
            header("Location:" .BASE_URL. "login");
            exit();
        }else{

        }
    }
    public static function checksessionuser(){
        if(self::get('login')==false){
            self::destroy();
            header("Location:" .BASE_URL. "login");
            exit();
        }else{

        }
    }
}
?>