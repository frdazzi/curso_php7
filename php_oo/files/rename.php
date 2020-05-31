<?php
    $dir1 = "folder_01";
    $dir2 = "folder_02";

    if (!is_dir($dir1)) mkdir($dir1);
    if (!is_dir($dir2)) mkdir($dir2);

    $file = "README.txt";
    $filename = $dir1.DIRECTORY_SEPARATOR.$file;
    if (!file_exists($filename)) {
        $file = fopen($filename, "w+");

        fwrite($file, date("Y-m-d H:i:s"));

        fclose($file);
    }

    $destino = $dir2.DIRECTORY_SEPARATOR.$file;
    rename($filename, $destino);
    echo "Arquivo movido com sucesso!";
?>
