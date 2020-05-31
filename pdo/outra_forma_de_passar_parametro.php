<?php
    // Conecta ao BD instanciando a classe PDO
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    // Abre uma transacao - esta vinculada a conexao e nao ao statment
    $conn->beginTransaction();

    // Prepara a string SQL
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

    // Caso a string SQL use parametros, faz o bind da string com os mesmos
    $id = 4;

    $stmt->execute(array($id));

    // Rollback - Nao executa / cancela a transacao
    $conn->rollback();
    echo "Registro com idusuario = {$id} nao foi apagado com sucesso!";

    // Commit - Executaa transacao
    //$conn->commit();
    //echo "Registro com idusuario = {$id} foi apagado com sucesso!";
?>
