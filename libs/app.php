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

            $archivoController = 'controllers/' . $url[0] . '.php';

            if(file_exists($archivoController)){
                require_once $archivoController;
    
                // inicializar controlador
                $controller = new $url[0];
                $controller->loadModel($url[0]);
    
                // si hay un método que se requiere cargar
                if(isset($url[1])){
                    if(method_exists($controller, $url[1])){
                        if(isset($url[2])){
                            //el método tiene parámetros
                            //sacamos e # de parametros
                            $nparam = sizeof($url) - 2;
                            //crear un arreglo con los parametros
                            $params = [];
                            //iterar
                            for($i = 0; $i < $nparam; $i++){
                                array_push($params, $url[$i + 2]);
                            }
                            //pasarlos al metodo   
                            $controller->{$url[1]}($params);
                        }else{
                            //no tiene parametros se llama el metodo como esta
                            $controller->{$url[1]}();    
                        }
                    }else{
                        //error no existe el metodo
                        // $controller = new Errores(); 
                        
                    }
                }else{
                    // no hay metodo a cargar se carga el metodo por default
                    $controller->render();
                }
            }else{
                //no existe archivo, mandar error
                $controller = new Errores();
                $controller->render();
            }

        }

    }

?>