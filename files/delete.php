<?php
    require_once("config.php");
    $deleteFile = "teste.txt";

    // Cria um arquivo novo se ele nao existe
    // Apaga um arquivo existente
    if (file_exists($deleteFile)) {
        unlink($deleteFile);
        echo "Arquivo '{$deleteFile}' removido com sucesso!";
    } else {
        $file = fopen($deleteFile,"w+");
        fclose($file);
        echo "Arquivo '{$deleteFile}' criado com sucesso!";
    }

    echo "<hr>";

    // Cria um diretorio 'Teste'
    // Insere dois arquivos
    // Apaga o diretorio e arquvos
    $dirTeste = "Teste";
    if (!is_dir($dirTeste)){
        mkdir($dirTeste);
        echo "Diretório '{$dirTeste}' criado com sucesso!<br>";

        $fileArq1 = "arq1.txt";
        $file = fopen($dirTeste.DIRECTORY_SEPARATOR.$fileArq1,"w+");
        fclose($file);
        echo "Arquivos '{$dirTeste}/arq1.txt' do diretório inseridos com sucesso!<br>";

        $fileArq1 = "arq2.txt";
        $file = fopen($dirTeste.DIRECTORY_SEPARATOR.$fileArq1,"w+");
        fclose($file);
        echo "Arquivo '{$dirTeste}/arq2.txt'do diretório inseridos com sucesso!<br>";

    } else {
        foreach(scandir($dirTeste) as $fileDir) {
            if (!in_array($fileDir, array(".",".."))) {
                unlink($dirTeste.DIRECTORY_SEPARATOR.$fileDir);
            }
        }
        rmdir($dirTeste);

        echo "Diretório '{$dirTeste}' excluído com sucesso!";
    }
?>
