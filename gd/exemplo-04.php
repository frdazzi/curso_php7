<?php
    header("Content-type: image/jpeg");

    $file = "wallpaper.jpg";

    $new_width  = 256;
    $new_height = 256;

    // $data = getimagesize($file);
    // $width = $data[0];
    // $height = $data[1];

    // ou

    // Essa funcao list
    list($old_width, $old_height) = getimagesize($file);

    $new_image = imagecreatetruecolor($new_width, $new_height);
    $old_image = imagecreatefromjpeg($file);

    // Copy para outra imagem redimensionada
    // Parametros:
    // - nova imagem, imagem antiga, posicoes x e y da imagem de destino,
    // - x e y da imagem de origem,
    // Se quiser reduzir proporcionamento, podemos pegar os
    // tamanhos width e height da imagem original e dividir
    // por 2, ou por 4, etc.
    imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

    imagejpeg($new_image);

    imagedestroy($old_image);
    imagedestroy($new_image);

?>
