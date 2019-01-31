<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Cnab\Retorno;


//$fileContent = file_get_contents('src/samples/retorno_cnab400_itau.ret');
$fileContent = file_get_contents('src/samples/phpyoiOl5_5a9011f5495133_12170818.ret');
//$fileContent = file_get_contents('src/samples/retorno-000021.ret');

try {
    $arquivo = new Retorno($fileContent);
} catch (\Exception $e) {
    echo $e->getMessage();
}
dd($arquivo->getRegistros());
