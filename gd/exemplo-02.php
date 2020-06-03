<?php
    $image = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 140,240, utf8_decode("Certificamos que o Sr. Fábio Rosalem Dazzi concluiu o curso de PHP 7."), $titleColor);
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);
    imagestring($image, 3, 440, 500, utf8_decode("_____________________"), $titleColor);
    imagestring($image, 3, 480, 515, utf8_decode("Assinatura"), $titleColor);

    header("Content-Type: image/jpeg");
    imagejpeg($image); // exibe em tela
    //imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 100); // Salva em arquivo
    imagedestroy($image);

?>
