<?php
    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Fabio Dazzi");
    $cad->setEmail("frdazzi@gmail.com");
    $cad->setSenha("12345");

    $cad->registrarVenda();
?>
