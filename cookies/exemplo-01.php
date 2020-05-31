<?php
    $data = array(
        "empresa"=>"Dazzi Soluções S.A."
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time()+3600);

    echo "OK, cookie criado!";
?>
