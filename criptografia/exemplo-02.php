<?php

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

// Informacoes que quero trafegar de forma
// Criptografada
$data = [
    "nome"=>"Hcode"
];

// Metodo encrypt
$openssl = openssl_encrypt(
        json_encode($data), // Informacoes
        'AES-128-CBC',      // Algoritmo de criptografa
        SECRET,             // Primeira Chave
        0,                  // Opcoes
        SECRET_IV           // Segunda Chave
);

var_dump($openssl);


// Metodo decrypt
$string = openssl_decrypt(
        $openssl, // Informacoes
        'AES-128-CBC',      // Algoritmo de criptografa
        SECRET,             // Primeira Chave
        0,                  // Opcoes
        SECRET_IV           // Segunda Chave
);

var_dump(json_decode($string));

?>
