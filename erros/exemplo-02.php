<?php
    // Altera as confinguracoes de
    // exibicao de error do PHP
    // isso pode ser ajustado dentro
    // de php.ini na opcao error_reporting
    error_reporting(E_ALL & ~E_NOTICE);

    $nome = $_GET['nome'];

    echo $nome;
?>
