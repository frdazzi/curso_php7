<?php
    require_once("config.php");

    $csvFile = "usuarios.csv";

    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

    // Colunas do arquivo csv
    $headers = array();
    foreach($usuarios[0] as $key => $value) {
        array_push($headers, ucfirst($key));
    }
    $file = fopen($csvFile, "w+");
    fwrite($file, implode(",",$headers)."\r\n");


    // Dados do arquivo csv
    foreach($usuarios as $row) {
        $data = array();

        foreach ($row as $key => $value) {
            array_push($data, $value);
        }
        fwrite($file, implode(",", $data)."\r\n");
    }



    fclose($file);
?>
