<?php
    require_once "config.php";

    $_SESSION['nome'] = 'Fabio';

    echo session_id();

    echo "<br>";

    var_dump($_SESSION);


    echo "<br><hr><br>";


    session_regenerate_id();

    echo session_id();

    echo "<br>";

    var_dump($_SESSION);

    echo "<br><hr><br>";


    // Zera as varaveis de sessao, mas mantem a sessao
    session_unset();

    echo session_id();

    echo "<br>";

    var_dump($_SESSION);



    echo "<br><hr><br>";

    // Destroi a sessao atual do usuario
    session_destroy();

    echo session_id();

    echo "<br>";

    var_dump($_SESSION);

?>
