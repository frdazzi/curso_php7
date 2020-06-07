<?php
// Permissoes de Pasta
// 0 - sem permissao
// 1 - execucao
// 2 - gravacao
// 3 - execucao e gravacao
// 4 - leitura
// 5 - leitura e execucao
// 6 - leitura e gravacao
// 7 - leitura, execucao e gravacao
// Para  usar essas permissoes, tem que
// seguir a regra do UNIX
// 0675
// 6 - o que o dono (quem criou) pode fazer
//     exemplo o usuario que esta executando o Apache
//     por exemplo, e ele quem tem essa permissao
//     nao e o usuario que acessa o site, e quem criou
// 7 - grupos de usuarios
// 5 - Outros, guests, visitantes
$pasta = "arquivos";
$permissao = "0775";
if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretorio criado com sucesso!";
?>
