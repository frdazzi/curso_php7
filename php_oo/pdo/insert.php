<?php
    // Conecta ao BD instanciando a classe PDO
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    // Prepara a string SQL
    $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VaLUES (:LOGIN, :PASSWORD)");

    // Caso a string SQL use parametros, faz o bind da string com os mesmos
    $login = "jose";
    $password = "1234568";
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Dados cadastrados com sucesso!";
?>
