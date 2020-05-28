<?php
    // Conecta ao BD instanciando a classe PDO
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    // Prepara a string SQL
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    // Caso a string SQL use parametros, faz o bind da string com os mesmos
    $id = 5;
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Registro com idusuario = {$id} apagado com sucesso!";
?>
