<?php

    class Home extends controller{

        function __construct(){
            parent::__construct();
        }

        //se llama el metodo render de la clase view para cargar una vista
        function render(){
            $this->view->render('home/index');
        }

    }

?>