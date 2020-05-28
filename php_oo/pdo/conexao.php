<?php
    // Para conectar ao BD via PDO, utilizamos a classe PDO passando
    // Parametros
    // - DSN (Data Source Name): string de conexao com o BD
    //   - pode ser qualquer BD - MySQL, SQL Server, Oracle, etc.
    //   - para cada banco o DSN muda, o restante continua igual
    // - user: usuario de conexao com o BD
    // - password: senha de conexao com o BD

    // PDO para conectar a um banco SQL Server
    // No caso do SQL Server, o DSN tem 04 informaçoes
    // - sqlsrv:  nome da fonte de dados
    // - server:   URL do BD \ Instancia do Banco de Dados
    // - Database: nome do banco
    // - ConnectionPooling: usar ou nao pool de conexao (nao utilizado no SQL Expresse)
    // USER:     usuario de conexao
    // PASSWORD: senha do usuario de conexao
    //$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0","sa","");


    // PDO para conectar a um banco MySQL
    // DSN: No caso do MySQL, o DSN tem 03 informaçoes
    // - mysql:  nome da fonte de dados
    // - host:   URL do BD
    // - dbname: nome do banco
    // USER:     usuario de conexao
    // PASSWORD: senha do usuario de conexao
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);

    foreach ($result as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>{$key}:</strong> {$value}<br>";
        }
        echo "=========================<br>";
    }
?>
