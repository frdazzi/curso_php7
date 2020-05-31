<?php
    define("SERVIDOR","localhost");

    echo SERVIDOR;

    echo "<hr>";

    // Novidade no PHP 7 e o uso de constante do tipo array
    define("BANCO_DE_DADOS", [
        'localhost',
        'root',
        'senha',
        'nome-do-banco'
    ]);

    print_r(BANCO_DE_DADOS);

    echo "<hr>";

    echo PHP_VERSION;

    echo "<hr>";

    echo DIRECTORY_SEPARATOR;

    echo "<hr>";

    echo PHP_OS ;

    echo "<hr>";

    echo "Para ver a lista de constantes reservadas do PHP, clique abaixo:<br>";
    echo "<a href='https://www.php.net/manual/pt_BR/reserved.constants.php' target='blank'>";
    echo 'https://www.php.net/manual/pt_BR/reserved.constants.php';
    echo "</a>";
 ?>
