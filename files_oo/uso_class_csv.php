<?php
    require_once("config.php");

    $csvFilename = "uso_class_csv.csv";
    $type     = "w+";
    $destino  = "folder_01".DIRECTORY_SEPARATOR.$csvFilename;

    // Para criar um arquivo .csv, e necessario passar um array de arrays
    $usuarios = array(
        array(
            'id'=>1,
            'nome'=>'Fabio'
        )
    );
    var_dump($usuarios);
    // No caso de carga vida do BD, basta usar a funcao select da classe Sql()
    //$sql = new Sql();
    //$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
    //var_dump($usuarios);

    // Cria um arquivo .csv
    Csv::crateCsv(true,$usuarios,$csvFilename);

    // Le um arquivo .csv
    //$retorno = Csv::readCsv($csvFilename);
    //var_dump($retorno);
    //echo json_encode($retorno);
?>
