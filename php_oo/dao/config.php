<?php
    // Definicao de Constantes
    define("DBDSN","mysql:host=localhost;dbname=dbphp7");
    define("DBUSER","root");
    define("DBPASS","");

    // Configuracao de linguagem e localidade GMT
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set ("America/Sao_Paulo");

    // Carga automatica de classes
    spl_autoload_register(function($class_name){
        $filename = "class".DIRECTORY_SEPARATOR.$class_name . ".php";

        if (file_exists($filename)) {
            require_once($filename);
        }
    });
?>
