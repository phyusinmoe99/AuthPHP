<?php

namespace Helpers;

class Auth{
    static function check(){
        session_start();
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        //same namespace HTTP and Auth
        HTTP::redirect("/index.php" , "auth=fail");
    }
}