<?php

$id = (isset($_GET['id']))?$_GET['id']:1;

// Valida se ha SQL Injection
// Para testar a falha sem esse codigo,
// comente o codigo abaixo e digita
// "exemplo-02.php?id=3 OR 1=1 -- "
//if (!is_numeric($id) || strlen($id) > 5) {
//    exit("Pegamos Você!");
//}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = '$id'";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    var_dump($resultado);
}
?>
