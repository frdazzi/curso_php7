<?php
    class Pessoa {
        public $nome;

        public function falar() {
            return "Meu nome é ".$this->nome;
        }
    }

    $fabio = new Pessoa();
    $fabio->nome = "Fabio Dazzi";
    echo $fabio->falar();
?>
