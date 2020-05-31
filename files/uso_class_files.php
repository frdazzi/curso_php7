<?php
    require_once("config.php");

    $filename = "uso_class_files.txt";
    $type     = "r";
    $destino  = "folder_01".DIRECTORY_SEPARATOR.$filename;

    // Cria um arquivo
    //$file = new File($filename,$type);

    // Escreve algo no arquivo
    //$file->write("Alguma coisa");

    // Le o conteudo de um arquivo e retorna como array de linhas do arquivo
    // if ($arquivo = $file->read()) {
    //     var_dump($arquivo);
    // }

    // Fecha o arquivo
    //$file->close();



    // Funcoes estaticas para uso com arquivo fechado
    //var_dump(File::move($filename,$destino));
    //var_dump(File::delete($destino));

    // Enviar um arquivo
    // Precisa de um formulario HTML
    // echo "<form method='post' enctype='multipart/form-data'>";
    // echo "<input type='file' name='fileUpload'>";
    // echo "<button>Enviar</button>";
    // echo "</form>";
    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     var_dump(File::upload('fileUpload',"folder_01"));
    // }
?>
