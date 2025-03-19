<?php

    class App{

        function __construct(){

            // toma la url y la separa
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/'); 
            $url = explode('/', $url);

            // ingresa si no hay controlador especificado 
            if(empty($url[0])){

                $archivoController = 'controllers/home.php';
                require_once $archivoController;

                $controller = new Home();
                $controller->loadModel('home');
                $controller->render();
                return false;
            }

        }

    }

?>