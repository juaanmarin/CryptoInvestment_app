<?php

    class View{

        function __construct(){
        }

        // Para cargar las vistas
        function render($name, $data=[]){
            // $this->d = $data;
            // $this->handleMessages();   
            
            //error_log("View::View-> ".'views/'.$nombre.'.php');
            require 'views/'.$name.'.php';
        }

    }
?>