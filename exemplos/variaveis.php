<?php
    $nome = "Fabio";

    function teste() {
        global $nome;

        echo $nome;
    }

    teste();

    echo "<br><hr>";

    echo "PHP_SELF: {$_SERVER['PHP_SELF']}<hr>";

    echo "GATEWAY_INTERFACE: {$_SERVER['GATEWAY_INTERFACE']}<hr>";

    echo "SERVER_ADDR: {$_SERVER['SERVER_ADDR']}<hr>";

    echo "SERVER_NAME: {$_SERVER['SERVER_NAME']}<hr>";

    echo "SERVER_SOFTWARE: {$_SERVER['SERVER_SOFTWARE']}<hr>";

    echo "SERVER_PROTOCOL: {$_SERVER['SERVER_PROTOCOL']}<hr>";

    echo "REQUEST_METHOD: {$_SERVER['REQUEST_METHOD']}<hr>";

    echo "REQUEST_TIME: {$_SERVER['REQUEST_TIME']}<hr>";

    echo "REQUEST_TIME_FLOAT: {$_SERVER['REQUEST_TIME_FLOAT']}<hr>";

    echo "QUERY_STRING: {$_SERVER['QUERY_STRING']}<hr>";

    echo "DOCUMENT_ROOT: {$_SERVER['DOCUMENT_ROOT']}<hr>";

    echo "HTTP_ACCEPT: {$_SERVER['HTTP_ACCEPT']}<hr>";

    //echo "HTTP_ACCEPT_CHARSET: {$_SERVER['HTTP_ACCEPT_CHARSET']}<hr>";

    echo "HTTP_ACCEPT_ENCODING: {$_SERVER['HTTP_ACCEPT_ENCODING']}<hr>";

    echo "HTTP_ACCEPT_LANGUAGE: {$_SERVER['HTTP_ACCEPT_LANGUAGE']}<hr>";

    echo "HTTP_CONNECTION: {$_SERVER['HTTP_CONNECTION']}<hr>";

    echo "HTTP_HOST: {$_SERVER['HTTP_HOST']}<hr>";

    //echo "HTTP_REFERER: {$_SERVER['HTTP_REFERER']}<hr>";

    echo "HTTP_USER_AGENT: {$_SERVER['HTTP_USER_AGENT']}<hr>";

    //echo "HTTPS: {$_SERVER['HTTPS']}<hr>";

    echo "REMOTE_ADDR: {$_SERVER['REMOTE_ADDR']}<hr>";

    echo "REMOTE_HOST: {$_SERVER['REMOTE_HOST']}<hr>";

    echo "PHP_SELF: {$_SERVER['PHP_SELF']}<hr>";
?>
