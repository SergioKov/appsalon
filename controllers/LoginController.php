<?php

namespace Controllers;

use MVC\Router;

class LoginController {

    public static function login(Router $router){
        //echo "Desde Login...";

        $router->render('auth/login');
        //$router->render('layout');

    }

    public static function logout(){
        echo "Desde Logout...";
    }

    public static function olvide(){
        echo "Desde Olvide...";
    }

    public static function recuperar(){
        echo "Desde Recuperar...";
    }

    public static function crear(){
        echo "Desde Crear...";
    }


}