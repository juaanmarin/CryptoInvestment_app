<?php

    //para manejar errores y hacer logs
    error_reporting(E_ALL); // Error/Exception engine, always use E_ALL
    ini_set('ignore_repeated_errors', TRUE); // always use TRUE
    ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment
    ini_set('log_errors', TRUE); // Error/Exception file logging engine.    
    ini_set("error_log", "php-error.log");

    // se cargan los archivos base
    require_once 'libs/database.php';
    require_once 'libs/controller.php';
    require_once 'libs/model.php';
    require_once 'libs/view.php';
    require_once 'libs/app.php';

    // se cargan las configuraciones globales
    require_once 'config/config.php';

    //se inicia el programa
    $app = new App();

?>