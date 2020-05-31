<?php

    class File {
        public $filename;
        public $type;
        public $file; // do tipo resource

        // Parametros
        // - filename: string com o nome do Arquivo
        // - type: tipo de abertura do Arquivo
        // - 'r'  -> Abre somente para leitura; coloca o ponteiro do arquivo
        //           no começo do arquivo.
        // - 'r+' -> Abre para leitura e escrita; coloca o ponteiro do arquivo
        //           no começo do arquivo.
        // - 'w'  -> Abre somente para escrita; coloca o ponteiro do arquivo
        //           no começo do arquivo e reduz o comprimento do arquivo para
        //           zero. Se o arquivo não existir, tenta criá-lo.
        // - 'w+' -> Abre para leitura e escrita; coloca o ponteiro do arquivo
        //           no começo do arquivo e reduz o comprimento do arquivo para
        //           zero. Se o arquivo não existir, tenta criá-lo.
        // - 'a'  -> Abre somente para escrita; coloca o ponteiro do arquivo no
        //           final do arquivo. Se o arquivo não existir, tenta criá-lo.
        // - 'a+' -> Abre para leitura e escrita; coloca o ponteiro do arquivo
        //           no final do arquivo. Se o arquivo não existir, tenta criá-lo.
        // - 'x'  -> Cria e abre o arquivo somente para escrita; coloca o
        //           ponteiro no começo do arquivo. Se o arquivo já existir, a
        //           chamada a fopen() falhará, retornando FALSE e gerando um
        //           erro de nível E_WARNING. Se o arquivo não existir, tenta
        //           criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT
        //           para a chamada de sistema open(2).
        // - 'x+' -> Cria e abre o arquivo para leitura e escrita; coloca o
        //           ponteiro no começo do arquivo. Se o arquivo já existir, a
        //           chamada a fopen() falhará, retornando FALSE e gerando um erro
        //           de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
        //           Isto é equivalente a especificar as flags O_EXCL|O_CREAT para
        //           a chamada de sistema open(2).
        public function __construct($filename, $type) {
            $this->filename = $filename;
            $this->type = $type;

            $this->file = fopen($filename,$type);
        }

        public function close() {
            fclose($this->file);
        }

        public function write($conteudo) {
            if ($conteudo!='') {
                fwrite($this->file, $conteudo);
            }
        }

        // Tenta realizar a leitura do arquivo
        // Retorno
        // - array: com as linhas do arquivo
        // - false: arquivo vazio ou nao foi possivel abrir o arquio para leitura
        public function read() {
            $types = array('r','r+');

            if (in_array($this->type, $types)) {
                $data = array();
                while($linha = fgets($this->file)){
                    $data[] = $linha;
                }
                if (count($data)==0)
                    return false;
                else
                    return $data;

            } else {
                return false;
            }
        }

        // Funciona dentro de um metodo request
        // - Chamda realizada por um formulario igual a
        //   <form method="post" enctype="multipart/form-data">
        // - filename e o nome do arquivo contido na tag, exemplo fileUpload abaixo
        //   <input type="file" name="fileUpload">
        public static function upload($filename,$dirupload) {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $file = $_FILES[$filename];

                if ($file['error']) {
                    throw new Exception("Error: ".$file["error"]);
                }

                if ($dirupload!=''){
                    if (!is_dir($dirupload)) {
                        mkdir($dirupload);
                    }
                } else
                    return false;

                // Move o arquivo de uma pasta temporaria do servidor
                // para a pasta de destino. Essa pasta temporaria
                // e utilizada pelo servidor para envio de grandes arquivos.
                if (move_uploaded_file($file["tmp_name"], $dirupload.DIRECTORY_SEPARATOR.$file["name"])) {
                    return true;
                } else {
                    throw new Exception("Não foi possível realizar o upload!");

                }

            } else {
                return false;
            }
        }

        public static function delete($filename) {
            if (file_exists($filename))
                return unlink($filename);
        }

        public static function move($search, $destination) {
            return rename($search, $destination);
        }
    }
?>
