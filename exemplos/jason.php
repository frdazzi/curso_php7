<?php
    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Fábio',
        'idade'=>40
    ));

    array_push($pessoas, array(
        'nome'=>'Juçara',
        'idade'=>37
    ));

    // json_encode transforma array em objeto json
    echo json_encode($pessoas);

    echo "<br><br><hr><br><br>";

    $umarray = '[{"nome":"F\u00e1bio","idade":40},{"nome":"Ju\u00e7ara","idade":37}]';

    // json_decode transorma um objeto json em um array
    // true  -> vira um array
    // false -> transforma em um objeto
    $pessoas2 = json_decode($umarray, true);

    print_r($pessoas2);

    echo "<hr>";

    echo $pessoas2[0]['nome'];
?>
