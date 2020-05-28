<?php
    class Pessoa {
        public $nome = "Fábio Dazzi";
        protected $idade = 40;
        private $senha = "12345";

        public function verDados() {
            echo get_class($this) . "<br/>";

            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";
        }
    }

    class Programador {
        public function verDados() {
            echo get_class($this) . "<br/>";

            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";
        }
    }

    $ju = new Pessoa();
    $ju->verDados();
    echo "<br>";
    $fabio = new Programador();
    $fabio->verDados();
?>
