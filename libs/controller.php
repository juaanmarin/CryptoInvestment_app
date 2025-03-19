<?php

    class Controller{

        function __construct(){
            $this->view = new View();
        }

        // Aqui se cargan los modelos
        function loadModel($model){
            $url = 'models/'.$model.'Model.php';
    
            if(file_exists($url)){
                require_once $url;
    
                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        }

    }

?>