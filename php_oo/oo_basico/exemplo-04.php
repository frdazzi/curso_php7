<?php
    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c) {
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){
            //var_dump("Destruir");
        }

        public function __toString(){
            return "{$this->logradouro}, {$this->numero} - {$this->cidade}";
        }
    }

    $meuEndereco = new Endereco("Avenida Antônio Gil Veloso","1302","Vila Velha");
    var_dump($meuEndereco);
    echo "<br><hr><br>";
    echo $meuEndereco;
    echo "<br><hr><br>";
?>
