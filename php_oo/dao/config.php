<?php
    define("DBDSN","mysql:host=localhost;dbname=dbphp7");
    define("DBUSER","root");
    define("DBPASS","");

    spl_autoload_register(function($class_name){
        $filename = "class".DIRECTORY_SEPARATOR.$class_name . ".php";

        if (file_exists($filename)) {
            require_once($filename);
        }
    });
?>
