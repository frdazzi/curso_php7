<?php
    // Conecta ao BD instanciando a classe PDO
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    // Prepara a string SQL
    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    // Caso a string SQL use parametros, faz o bind da string com os mesmos
    $id = 3;
    $login = "User 3";
    $password = "user3.12345";
    $stmt->bindParam(":ID", $id);
    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Dados alterados com sucesso!";
?>
