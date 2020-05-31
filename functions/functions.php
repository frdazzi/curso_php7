<?php
    // Funcoes com uso variavel de argumentos
    function ola(){

        $argumentos = func_get_args();

        return $argumentos;
    }
    var_dump(ola("Bom Dia",25));

    echo "<br><hr><br>";


    // Passagem de parametro por valor
    $a = 10;
    function trocaValor($b){
        $b += 50;
        return $b;
    }
    echo "{$a}<br>";
    echo trocaValor($a)."<br>";
    echo "{$a}<br>";


    echo "<br><hr><br>";


    // Passagem de parametro por referencia
    $a = 10;
    function trocaValor2(&$b){
        $b += 50;
        return $b;
    }
    echo "{$a}<br>";
    echo trocaValor2($a)."<br>";
    echo "{$a}<br>";


    echo "<br><hr><br>";

    // Outro exemplo interessnte de passagem por referencia
    $pessoa = array(
        'nome'=>'Fábio',
        'idade'=>30
    );

    foreach ($pessoa as &$value) {

        if (gettype($value) === 'integer') $value += 10;

        echo "{$value}<br>";

    }
    var_dump($pessoa);


    echo "<br><hr><br>";

    // Novidades no PHP 7

    // Passagem de parametros dinamicos tipados
    function soma(int ...$valores){
        return array_sum($valores);
    }
    echo soma(2, 2, 5);
    echo "<br>";
    echo soma(25, 15);
    echo "<br>";
    echo soma(1.6, 3.2); // ignora a parte flutuante.
    echo "<br>";

    echo "<br><hr><br>";

    // Retorno tipado e funcao
    function soma2(int ...$valores):string {
        return array_sum($valores);
    }
    echo var_dump(soma(2, 2, 5));
    echo "<br>";
    echo var_dump(soma2(2, 2, 5));

    echo "<br><hr><br>";

    // Fucoes anonimas
    function teste($callback){

        // Processo lento
        // Quando acabar este rocesso, executa uma funcao

        $callback();
    }

    teste(function(){
        echo "Terminou";
    });

    echo "<br><hr><br>";

    // Fucoes anonimas- outro exemplo
    $fn = function($a) {
        var_dump($a);
    };
    $fn("oi");

?>
