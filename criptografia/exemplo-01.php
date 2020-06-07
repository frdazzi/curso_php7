<?php
// A uncao mcrypt esta depreciada.
// Mas segue estrutura para entendimento
var_dump(PHP_VERSION);

// Informacoes que quero trafegar de forma
// Criptografada
$data = [
    "nome"=>"Hcode"
];

// A funcao pack transforma uma string comum
// em uma string de 16 caracteres
define('SECRET', pack('a16', 'senha'));

// Criamos um cofre (estrutura Criptografada)
// Onde inserimos essas informacoes e a chave
// deste cofre e o token ou senha
$mcrypt = mcrypt_encrypt(
        MCRYPT_RIJNDAEL_128, // Modo de criptografia
        SECRET,              // Chave ou senha
        json_encode($data),  // Informacoes
        MCRYPT_MODE_ECB      // Modo de Armazenamento
);

$final = base64_encode($mcrypt); // Usa base64 para ser
                                  // possivel guardr em variavel
var_dump($final);


// Para recuperar os valores, usamos decriptografia
$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128, // Modo de criptografia
    SECRET,              // Chave ou senha
    base64_decode($final),  // Informacoes
    MCRYPT_MODE_EC
);

var_dump(json_decode($string, true));


?>
