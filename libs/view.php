<?php

    class View{

        function __construct(){
        }

        // Para cargar las vistas
        function render($name, $data=[]){
  
            require 'views/'.$name.'.php';
            
        }

    }
?>