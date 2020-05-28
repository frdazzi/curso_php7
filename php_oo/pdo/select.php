<?php
    // Conecta ao BD instanciando a classe PDO
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    // Prepara a string SQL
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN ORDER BY deslogin");

    // Caso a string SQL use parametros, faz o bind da string com os mesmos
    $login = "jose";
    $stmt->bindParam(":LOGIN", $login);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);

    echo "Selecionando o registro com deslogin = {$login}<hr>";

    foreach ($result as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>{$key}:</strong> {$value}<br>";
        }
        echo "=========================<br>";
    }
?>
