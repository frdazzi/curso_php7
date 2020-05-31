<?php
    // timestamp e um valor numerico que marca quantos segundos uma data e hora tem
    // sendo o marco zero em 01 de janeiro de 1970

    // Exemplos de uso das funcoes de datas
    echo date("d/m/Y H:i:s");
    echo "<br>";
    echo time(); // Pega esse valor e usa como parametro para fixar o timestamp
    echo "<br>";
    echo date("d/m/Y H:i:s",1590359249);
    echo "<br>";
    echo strtotime("2001-09-11"); // Retorna o timestamp
    echo "<br>";
    $ts = strtotime("1980-05-07");
    echo date("d/m/Y",$ts);
    echo "<br>";
    echo date("l, d/m/Y",$ts);
    echo "<br>";
    // Podemos usar expressoes para determinar datas
    $ts = strtotime("now");
    echo date("l, d/m/Y",$ts);
    echo "<br>";
    $ts = strtotime("+1 day");
    echo date("l, d/m/Y",$ts);
    echo "<br>";
    $ts = strtotime("+1 week +2 day");
    echo date("l, d/m/Y",$ts);

    echo "<br><hr><br>";


    // Para trabalhar com datas horas locais utilizando strftime,
    // temos que setar qual padrao de localidade queremos
    // CONSTANTES
    // - LC_ALL para tudo abaixo
    // - LC_COLLATE para comparação de strings, veja strcoll()
    // - LC_CTYPE para classificação de caracteres e conversão, por exemplo strtoupper()
    // - LC_MONETARY para localeconv()
    // - LC_NUMERIC para o separador decimal (Veja também localeconv())
    // - LC_TIME para formatação de data e hora com strftime()
    // PADROES
    // para garantir que funcione tanto no linux quanto no windows, colocar os tres padroes
    // - linux:   pt_BR
    // - utf8:    pt_BR.utf-8
    // - windows: portuguese
    setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set ("America/Sao_Paulo");

    echo strftime("Hoje é %A, %d de %B de %G - %H:%M:%S");

    echo "<br><hr><br>";


    // Usando uma classe DateTime - orientada a objetos
    $dt = new DateTime();
    $periodo = new DateInterval("P15D");
    echo $dt->format("d/m/Y H:i:s");
    echo "<br>";
    $dt2 = $dt->add($periodo);
    echo $dt->format("d/m/Y H:i:s");
?>
