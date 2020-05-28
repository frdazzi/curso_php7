<?php
    $valor = 0;
    $valor += 100;
    $valor *= .9;

    echo $valor;



    echo "<hr>";

    $a = 50;
    $b = 60;
    // Se a>b, retorna 1. Se a=b, retorn 0. Se a<b, retonra -1.
    echo ($a <=> $b);



    echo "<hr>";

    // Se a=NULL, segue. Se b=NULL, segue. Se c=NULL, segue. Segue enquanto for NULL.
    $a = NULL;
    $b = NULL;
    $c = 10;
    echo $a ?? $b ?? $c;

?>
