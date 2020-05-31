<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">

    <button>Enviar</button>
</form>

<?php
    // So entra no codigo se o metodo de envio da
    // pagina for POST, ou seja, ha envio de formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $file = $_FILES["fileUpload"];

        if ($file['error']) {
            throw new Exception("Error: ".$file["error"]);
        }

        $dirUploads = "uploads";

        if (!is_dir($dirUploads)) {
            mkdir($dirUploads);
        }

        // Move o arquivo de uma pasta temporaria do servidor
        // para a pasta de destino. Essa pasta temporaria
        // e utilizada pelo servidor para envio de grandes arquivos.
        if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])) {
            echo "Upload realizado com sucesso!";
        } else {
            throw new Exception("Não foi possível realizar o upload!");

        }

    }
?>
