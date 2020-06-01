<?php

    class Csv extends File {

        // Recebe um array de arrays
        // - header: boolean se tem ou nao header (titulos) o .csv
        // - primeiro array e o conjunto de linhas
        // - segundo array sao as linhas formadas por chave=>valor
        // - filename e o dir/nome do arquivo que sera criado
        public static function crateCsv($header, $data, $filename) {
            $file = fopen($filename, "w+");

            // Colunas do arquivo csv
            if ($header) {
                $headers = array();
                foreach($data[0] as $key => $value) {
                    array_push($headers, ucfirst($key));
                }

                fwrite($file, implode(",",$headers)."\r\n");
            }

            // Dados do arquivo csv
            foreach($data as $row) {
                $data = array();

                foreach ($row as $key => $value) {
                    array_push($data, $value);
                }
                fwrite($file, implode(",", $data)."\r\n");
            }
            fclose($file);
        }

        public static function readCsv($filename) {
            if (file_exists($filename)) {
                $file = fopen($filename, "r");

                $headers = explode(",",fgets($file));

                $data = array();
                while ($row = fgets($file)) {
                    $rowData = explode(",",$row);

                    $linha = array();
                    for ($i = 0; $i < count($headers); $i++) {
                        $linha[$headers[$i]] = $rowData[$i];
                    }

                    array_push($data, $linha);
                }

                fclose($file);

                return $data;
            }
        }
    }
?>
