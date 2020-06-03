<?php
    function error_handler($code, $message, $file, $line) {
        echo json_encode(array(
            "code"=>$code,
            "message"=>$message,
            "line"=>$line,
            "file"=>$file
        ));
    }

    // Evita que o PHP mostre um erro
    // e executa uma função no lugar deste
    // erro
    set_error_handler("error_handler");

    $total = 100 / 0;
?>
