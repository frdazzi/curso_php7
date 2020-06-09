<?php
    $image = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    // Funcao imagettftext
    // Parametros: image, tamanho da fonte, angulo de inclinacao do texto, eixo-x, eixo-y, cor, caminho da font, texto
    imagettftext($image, 32, 0, 320, 150, $titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
    "CERTIFICADO");
    imagettftext($image, 32, 0, 310, 350, $titleColor,__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf",
    "Fábio Rosalem Dazzi");
    imagestring($image, 3, 400, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);
    //imagettftext($image, 32, 0, 450, 150, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");



    header("Content-type: image/jpeg");
    imagejpeg($image);
    imagedestroy($image);

?>
