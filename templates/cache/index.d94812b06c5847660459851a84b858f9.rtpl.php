<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Usando Template com RainTPL</title>
    </head>
    <body>
        <h1>Olá <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

        <p>Curso de PHP <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</p>
    </body>
</html>
