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

    public static function olvide(Router $router){//class Router y instancia $router  
        //echo "Desde Olvide...";

        $router->render('auth/olvide-password', [

        ]);
    }

    public static function recuperar(){
        echo "Desde Recuperar...";
    }

    public static function crear(Router $router){
        //echo "Desde Crear...";

        $router->render('auth/crear-cuenta', [

        ]);
    }


}